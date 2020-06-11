<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Frontend\IndexController@index');
Route::get('/shop-category/{id}', 'Frontend\CategoryProductController@index');
Route::get('/new-category/{id}', 'Frontend\CategoryBlogController@index');



/**
 * Route cho administrator
 */
Route::prefix('admin')->group(function() {
    // Gom nhóm các route cho phần admin
    Route::get('/', 'Backend\DashboardController@index');
});
