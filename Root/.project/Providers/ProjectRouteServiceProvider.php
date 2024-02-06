<?php

namespace Project\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class ProjectRouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->admin_routes();
        $this->site_routes();
    }

    public function admin_routes()
    {
        Route::prefix('ad')
            ->namespace('Admin\Http\Controllers')
            ->middleware('admin')
            // ->group(__DIR__."/../../.project/admin/routes.php");
            ->group(base_path() . "/.project/admin/routes.php");
    }

    public function site_routes()
    {
        Route::namespace('Site\Http\Controllers')
            ->middleware('web')
            ->group(__DIR__ . "/../../.project/site/routes.php");
    }
}
