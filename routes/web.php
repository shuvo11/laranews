<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FontviewConteoller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FontviewConteoller::class, 'show']);
Route::get('/travel', [FontviewConteoller::class, 'travel']);
Route::get('/sports', [FontviewConteoller::class, 'sports']);
Route::get('/politics', [FontviewConteoller::class, 'politics']);


Route::get('/magazine', [FontviewConteoller::class, 'magazine']);
Route::get('/business', [FontviewConteoller::class, 'business']);
Route::get('/arts', [FontviewConteoller::class, 'arts']);

Route::get('/contact', [FontviewConteoller::class, 'contact']);


Route::get('/admin', [AdminController::class, 'adminpage']);

Route::get('/login', [AdminController::class, 'Login']);



Route::get('/Category', [CategoriesController::class, 'create'])->name('Category');

Route::post('/store', [CategoriesController::class, 'store'])->name('store');
Route::get('/index', [CategoriesController::class, 'index'])->name('index');
Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('edit');


