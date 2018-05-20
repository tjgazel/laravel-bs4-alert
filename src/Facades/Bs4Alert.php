<?php 

namespace TJGazel\Bs4Alert\Facades;

use Illuminate\Support\Facades\Facade;
use TJGazel\Bs4Alert\Bs4Alert as Alert;

class Bs4Alert extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Alert::class;
    }
}