<?php

namespace App\Providers;

use App\Http\Repositories\Backend\Index\Eloquent\UserAdminRepositoryEloquent;
use App\Http\Repositories\Backend\Index\UserAdminRepositoryInterface;
use App\Http\Services\Backend\Index\Impl\UserAdminServiceImpl;
use App\Http\Services\Backend\Index\UserAdminServiceInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserAdminRepositoryInterface::class, UserAdminRepositoryEloquent::class);
        $this->app->singleton(UserAdminServiceInterface::class, UserAdminServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
