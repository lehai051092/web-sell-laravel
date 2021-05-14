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
            'uses' => 'Backend\Categories\Show@showCategories'
        ]);
        Route::get('/add', [
            'as' => 'backend.categories.add',
            'uses' => 'Backend\Categories\Add@redirectAdd'
        ]);
        Route::post('/create', [
            'as' => 'backend.categories.create',
            'uses' => 'Backend\Categories\Add@createCategory'
        ]);
    });
});

