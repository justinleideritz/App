<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [
    IndexController::class,
    'index',
] )->name( 'index' );

Route::get( '/shop', [
    ShopController::class,
    'index',
] )->name( 'shop' );

Route::get( '/login', [
    LoginController::class,
    'index',
] )->name( 'login' );
