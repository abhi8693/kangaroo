<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\enquiryController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [HomeController::class, 'todetailindex'])->name('front.detail');
Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::resource('enquiries', enquiryController::class);
Route::resource('contacts', ContactController::class);
Route::get('/package', [HomeController::class, 'topackage'])->name('front.package');
Route::get('/template', [HomeController::class, 'templates'])->name('front.template');
Route::get('/contact_us', [HomeController::class, 'contacts'])->name('front.contact');