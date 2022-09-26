<?php

namespace Ibnudirsan\HandleHttpApi;

use Illuminate\Support\ServiceProvider;
use Ibnudirsan\HandleHttpApi\Handler\HttpResponse;

class HttpHandleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HttpResponse::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}