<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\NichController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\templateController;
use App\Http\Controllers\PackageController;


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




Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/', function () {
        return view('backend.dashboard');
    });
    Route::resource('categories', CategoryController::class);

    Route::resource('types', TypeController::class);
    Route::resource('niches', NichController::class);
    Route::resource('budgets', BudgetController::class);
    Route::resource('templates', templateController::class);
    Route::resource('packages', PackageController::class);

    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
    Route::get('/type/delete/{id}', [TypeController::class, 'destroy'])->name('types.delete');
    Route::get('/budgets/delete/{id}', [BudgetController::class, 'destroy'])->name('budgets.delete');
    Route::get('/templates/delete/{id}', [templateController::class, 'destroy'])->name('templates.delete');
    Route::get('/packages/delete/{id}', [PackageController::class, 'destroy'])->name('packages.delete');
});
Auth::routes();
