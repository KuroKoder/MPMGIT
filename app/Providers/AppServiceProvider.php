<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Pagination\Paginator;
// use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        Gate::define('admin', function($user){
            return $user->role_id == '1';
        });
    }
}
