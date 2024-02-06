<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Admin\Controllers\Products;

Auth::routes();

Route::get('test', function () {
    return 'this is a dashboard!';

    //   return view('/admin/blogs/user');
    // return view('::index');

});

Route::get('db', function () {
    return "123";
});

Route::middleware(['auth', Admin\Http\Middleware\AdminGuard::class])->group(function () {
    // Route::get('/dashbord', function () {
        //     return view('views::products.index');
        // })->name('home');
        
        Route::get('/active', 'admin\PublicController@active');
        Route::get('/search', 'admin\SearchController@search');
    Route::resource('/dashbord', 'admin\HomeController');
    Route::resource('/coment', 'admin\ComentController');
    Route::resource('/product/key', 'admin\KeywordController');
    Route::resource('/product', 'admin\ProductController');
    Route::get('/productShow', 'admin\ProductController@showall');
    Route::resource('/addCategory', 'admin\CategoryController');
    Route::resource('/user', 'admin\UserController');
    Route::resource('/slider', 'admin\SliderController');
    Route::resource('/upload', 'admin\SliderController@upload');

    Route::resource('/addProduct', 'admin\ProductController');
    // Route::get('login','Auth\LoginController@login');
    Route::get('reg', 'Auth\LoginController@showregister');
    
    // Route::post('/setNewProducts',[SetProducts::class, 'setNewProducts']);
    Route::post('/setNewProducts', 'admin\SetProducts@setNewProducts');

    Route::post('/addCategory', 'admin\CategoryController@store');
});
Route::get('master', function () {
    return view('views::products.index');
});
