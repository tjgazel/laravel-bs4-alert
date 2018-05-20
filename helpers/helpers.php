<?php

if (!function_exists('bs4Alert')) {
    /**
     * Toastr helper function
     *
     * @return \TJGazel\Bs4Alert\Bs4Alert
     */
    function bs4Alert()
    {
        return app(\TJGazel\Bs4Alert\Bs4Alert::class);
    }

}