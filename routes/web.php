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

    // Trang chủ
    Route::get('/', 'Backend\DashboardController@index');

    // quản lý tin tức
    Route::get('/blog', 'Backend\BlogController@index');
    Route::get('/category-blog', 'Backend\CategoryBlogController@index');

    // quản lý sản phẩm
    Route::get('/category-product', 'Backend\CategoryProductController@index');
    Route::get('/product', 'Backend\ProductController@index');

    // quản lý tác giả
    Route::get('/author', 'Backend\AuthorController@index');

    // cấu hình trang web trong admin
    Route::get('/config', 'Backend\ConfigController@index');

    // quản lý đơn hàng
    Route::get('/product-order', 'Backend\ProductOrderController@index');

    // quản lý khách hàng
    Route::get('/customer', 'Backend\CustomerController@index');

    // quản lý đánh giá của khách hàng
    Route::get('/review', 'Backend\ReviewController@index');

    // quản lý nhà xuất bản
    Route::get('/publisher', 'Backend\PublisherController@index');

    // quản lý liên hệ khách hàng gửi từ bên ngoài frontend
    Route::get('/contact', 'Backend\ContactController@index');

    // quản lý chat support
    Route::get('/chat', 'Backend\ChatController@index');

});
