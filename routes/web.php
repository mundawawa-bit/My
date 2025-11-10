<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContactController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
