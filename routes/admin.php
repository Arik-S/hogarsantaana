<?php

use App\Livewire\AdminDonations;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DonationController;
use App\Livewire\AdminProducts;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('productos', ProductController::class)->names('productos');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('users');

Route::resource('donation', DonationController::class)->names('donation');  

Route::get('/donations/export', [AdminDonations::class, 'excel'])->name('donations.export');

Route::get('/products/export', [AdminProducts::class, 'excel'])->name('products.export');
