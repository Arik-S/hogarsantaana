<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\BackgroundController;
use App\Http\Controllers\Admin\UserController;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::get('fondos', [BackgroundController::class, 'index'])->name('admin.background');

Route::resource('productos', ProductController::class)->names('productos');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('users');


//Route::resource('admin/productos', 'ProductController')->names('productos');
