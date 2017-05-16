<?php

namespace App\Applications\Admin\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Applications\Admin\Http\Controllers';

    public function boot(Router $router)
    {
        $this->registerRoutes($this->app['router']);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    protected function registerRoutes(Router $router)
    {
        $router->group(['middleware' => ['web'], 'namespace' => $this->namespace], function ($router) {
            require base_path('routes/applications/admin.php');
        });
    }
}