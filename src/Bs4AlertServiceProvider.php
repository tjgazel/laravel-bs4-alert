<?php 

namespace TJGazel\Bs4Alert;

use TJGazel\Bs4Alert\Bs4Alert;
use Illuminate\Support\ServiceProvider;

class Bs4AlertServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('bs4-alert.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/bs4-alert')
        ], 'template');

        $this->loadViewsFrom(__DIR__ . '/../views', 'bs4-alert');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Bs4Alert::class, function ($app) {
            return new Bs4Alert($app['session'], $app['config']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Bs4Alert::class];
    }
}