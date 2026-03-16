<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [
    IndexController::class,
    'index',
] )->name( 'index' )->middleware( 'auth' );

Route::get( '/shop', [
    ShopController::class,
    'index',
] )->name( 'shop' )->middleware( 'auth' );

Route::get( '/login', [
    LoginController::class,
    'index',
] )->name( 'login' );

Route::post( '/login_form', [
    LoginController::class,
    'loginForm',
] )->name( 'login.form' );

Route::get( '/register', [
    RegisterController::class,
    'index',
] )->name( 'register' );
