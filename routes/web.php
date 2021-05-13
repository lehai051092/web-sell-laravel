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
    'uses' => 'Frontend\Index\IndexController@index',
]);

// Admin
Route::prefix('admin')->group(function () {
    Route::get('/', [
        'as' => 'backend.index',
        'uses' => 'Backend\Index\IndexController@index'
    ]);
    Route::get('/dashboard', [
        'as' => 'backend.dashboard',
        'uses' => 'Backend\Index\IndexController@showDashboard'
    ]);
    Route::post('/login', [
        'as' => 'backend.login.dashboard',
        'uses' => 'Backend\Index\IndexController@loginDashBoard'
    ]);
    Route::get('/logout', [
        'as' => 'backend.logout.dashboard',
        'uses' => 'Backend\Index\IndexController@logoutDashBoard'
    ]);
});

