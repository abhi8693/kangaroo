<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\NichController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\enquiryController;
use App\Http\Controllers\templateController;


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

Route::get('/admin', function () {
    return view('backend.dashboard');
});
Route::resource('categories', CategoryController::class);

Route::resource('types', TypeController::class);
Route::resource('niches', NichController::class);
Route::resource('budgets', BudgetController::class);
Route::resource('enquiries', enquiryController::class);
Route::resource('templates', templateController::class);

Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
Route::get('/type/delete/{id}', [TypeController::class, 'destroy'])->name('types.delete');
Route::get('/budgets/delete/{id}', [BudgetController::class, 'destroy'])->name('budgets.delete');
Route::get('/templates/delete/{id}', [templateController::class, 'destroy'])->name('templates.delete');

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/store',[HomeController::class,'store'])->name('store');
Route::get('/detail/{slug}',[HomeController::class,'todetailindex'])->name('front.detail');                  



