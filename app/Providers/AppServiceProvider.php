<?php

namespace App\Providers;

use App\Http\Repositories\CategoryRepositoryInterface;
use App\Http\Repositories\Eloquent\CategoryRepositoryEloquent;
use App\Http\Services\CategoryServiceInterface;
use App\Http\Services\Impl\CategoryServiceImpl;
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
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepositoryEloquent::class);
        $this->app->singleton(CategoryServiceInterface::class, CategoryServiceImpl::class);
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
