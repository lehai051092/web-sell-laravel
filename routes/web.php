<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Frontend
Route::get('/', [
    'as' => 'frontend.index',
    'uses' => 'Frontend\Index@index',
]);

// Admin
Route::prefix('admin')->group(function () {
    Route::get('/', [
        'as' => 'backend.index',
        'uses' => 'Backend\Index@index'
    ]);
    Route::get('/dashboard', [
        'as' => 'backend.dashboard',
        'uses' => 'Backend\Index@showDashboard'
    ]);
    Route::post('/login', [
        'as' => 'backend.login.dashboard',
        'uses' => 'Backend\Index@loginDashBoard'
    ]);
    Route::get('/logout', [
        'as' => 'backend.logout.dashboard',
        'uses' => 'Backend\Index@logoutDashBoard'
    ]);

    // Categories
    Route::prefix('categories')->group(function () {
        Route::get('/list', [
            'as' => 'backend.categories.list',
            'uses' => 'Backend\Categories\Index@listCategory'
        ]);
        Route::get('/add', [
            'as' => 'backend.categories.add',
            'uses' => 'Backend\Categories\Actions\Add@redirectAddCategory'
        ]);
        Route::post('/create', [
            'as' => 'backend.categories.create',
            'uses' => 'Backend\Categories\Actions\Add@createCategory'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'backend.categories.edit',
            'uses' => 'Backend\Categories\Actions\Update@redirectEditCategory'
        ]);
        Route::post('/update/{id}', [
            'as' => 'backend.categories.update',
            'uses' => 'Backend\Categories\Actions\Update@updateCategory'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'backend.categories.delete',
            'uses' => 'Backend\Categories\Actions\Delete@deleteCategory'
        ]);
    });

    // Brands
    Route::prefix('brands')->group(function () {
        Route::get('/list', [
            'as' => 'backend.brands.list',
            'uses' => 'Backend\Brands\Index@listBrand'
        ]);
        Route::get('/add', [
            'as' => 'backend.brands.add',
            'uses' => 'Backend\Brands\Actions\Add@redirectAddBrand'
        ]);
        Route::post('/create', [
            'as' => 'backend.brands.create',
            'uses' => 'Backend\Brands\Actions\Add@createBrand'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'backend.brands.edit',
            'uses' => 'Backend\Brands\Actions\Update@redirectEditBrand'
        ]);
        Route::post('/update/{id}', [
            'as' => 'backend.brands.update',
            'uses' => 'Backend\Brands\Actions\Update@updateBrand'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'backend.brands.delete',
            'uses' => 'Backend\Brands\Actions\Delete@deleteBrand'
        ]);
    });
});

