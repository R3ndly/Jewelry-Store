<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminTableController;
use App\Http\Controllers\Admin\AdminWorkerController;
use App\Http\Controllers\Admin\AdminOrdersController;
use App\Http\Controllers\Admin\AdminSuppliersController;

Route::middleware("auth:admin")->group(function(){
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    
    
    //Таблицы
    Route::resource('products', AdminTableController::class);
    Route::resource('workers', AdminWorkerController::class);
    Route::resource('orders', AdminOrdersController::class);
    Route::resource('suppliers', AdminSuppliersController::class);
});


Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::post('/login_process', [AdminController::class, 'login'])->name('login_process');


