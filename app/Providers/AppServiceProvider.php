<?php

namespace App\Providers;

use App\Repositories\Backend\Eloquent\BrandsRepository;
use App\Repositories\Backend\Eloquent\CategoriesRepository;
use App\Repositories\Backend\Eloquent\MenusRepository;
use App\Repositories\Backend\Eloquent\ProductsRepository;
use App\Repositories\Backend\Eloquent\UsersAdminRepository;
use App\Repositories\Backend\Interfaces\BrandsRepositoryInterface;
use App\Repositories\Backend\Interfaces\CategoriesRepositoryInterface;
use App\Repositories\Backend\Interfaces\MenusRepositoryInterface;
use App\Repositories\Backend\Interfaces\ProductsRepositoryInterface;
use App\Repositories\Backend\Interfaces\UsersAdminRepositoryInterface;
use App\Services\Backend\Impl\BrandsService;
use App\Services\Backend\Impl\CategoriesService;
use App\Services\Backend\Impl\MenusService;
use App\Services\Backend\Impl\ProductsService;
use App\Services\Backend\Impl\UsersAdminService;
use App\Services\Backend\Interfaces\BrandsServiceInterface;
use App\Services\Backend\Interfaces\CategoriesServiceInterface;
use App\Services\Backend\Interfaces\MenusServiceInterface;
use App\Services\Backend\Interfaces\ProductsServiceInterface;
use App\Services\Backend\Interfaces\UsersAdminServiceInterface;
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
        // index
        $this->app->singleton(UsersAdminRepositoryInterface::class, UsersAdminRepository::class);
        $this->app->singleton(UsersAdminServiceInterface::class, UsersAdminService::class);
        // menus
        $this->app->singleton(MenusRepositoryInterface::class, MenusRepository::class);
        $this->app->singleton(MenusServiceInterface::class, MenusService::class);
        // categories
        $this->app->singleton(CategoriesRepositoryInterface::class, CategoriesRepository::class);
        $this->app->singleton(CategoriesServiceInterface::class, CategoriesService::class);
        // brands
        $this->app->singleton(BrandsRepositoryInterface::class, BrandsRepository::class);
        $this->app->singleton(BrandsServiceInterface::class, BrandsService::class);
        // products
        $this->app->singleton(ProductsRepositoryInterface::class, ProductsRepository::class);
        $this->app->singleton(ProductsServiceInterface::class, ProductsService::class);
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
