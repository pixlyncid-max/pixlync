<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;

Route::get('/',         [HomeController::class,     'index'])->name('home');
Route::get('/work',     [WorkController::class,     'index'])->name('work');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/about',    [AboutController::class,    'index'])->name('about');
Route::get('/blog',     [BlogController::class,     'index'])->name('blog');
