<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AdminGuard;
use App\Http\Controllers\admin\SetProducts;
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

Route::get('/da', function () {
    return Inertia::render('Test');
});
Route::prefix('admin')->middleware(['auth', AdminGuard::class])->group(function () {

    Route::get('/dashbord', function () {
        return view('admin/index');
    });

    Route::get('/addProduct', 'admin\SetProducts@index');;

    // Route::post('/setNewProducts',[SetProducts::class, 'setNewProducts']);
    Route::post('/setNewProducts', 'admin\SetProducts@setNewProducts');

    Route::get('/addCategory', 'admin\CategoryController@index');
    Route::post('/addCategory', 'admin\CategoryController@store');
});

Route::get('/shop', 'shop\shop@index');
Route::get('/product/{id}', 'shop\shop@show');
Route::get('/basket', 'basket\basket@index');



Route::get('/', function () {
    return view('welcome');
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/store','storeg@index');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pay/{amount}/{orderId}', 'shop\pay@index')->name('pay');
Route::get('/payresult', 'shop\pay@result')->name('payresult');
Route::post("/basketadd/{id}", 'basket\basket@addToBasket');
Route::get("/basketadd/{id}", 'basket\basket@addToBasket');
Route::get("/basketdata", 'basket\basket@GetBasketData');
Route::get("/basketforget", 'basket\basket@forget');
require __DIR__ . '/auth.php';
// require __DIR__.'/admin.php';
