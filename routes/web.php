<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');



Route::middleware("auth")->group(function(){
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::resource('products', ProductController::class);
        Route::resource('workers', WorkerController::class);
        Route::resource('orders', OrdersController::class);
        Route::resource('suppliers', SuppliersController::class);
        
        
        
        Route::get('/cart', [CartController::class, 'main'])->name('cart.index');
        Route::post('/cart/{product}/add', [CartController::class, 'add'])->name('cart.add');
        Route::delete('/cart/{cart}/remove', [CartController::class, 'remove'])->name('cart.remove');
});



Route::middleware("guest")->group(function(){
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login_process', [AuthController::class, 'login'])->name('login_procces');

        Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register_process', [AuthController::class, 'register'])->name('register_procces');
});




/*Auth::routes();

Route::get('/', [HomeController::class, 'home']);*/
