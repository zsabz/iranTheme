<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
// use Admin\Controllers\Products;

Route::get('test', function () {
    return 'this is a  site!';

    //   return view('/admin/blogs/user');
    // return view('::index');

});
