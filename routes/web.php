<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Forndend Routes
Route::get('/', [FrontendController::class, 'index']);

Route::get('/dashboard',[AdminController::class, 'index']);

// Sldier Routes
Route::get('/slider',[SliderController::class, 'slider'])->name('slider');
Route::get('/slider/add',[SliderController::class, 'add'])->name('add.slider');
Route::post('/slider/store',[SliderController::class, 'store'])->name('store.slider');
Route::get('/slider/edit/{id}',[SliderController::class, 'edit'])->name('edit.slider');
Route::post('/slider/update/{id}',[SliderController::class, 'update'])->name('update.slider');
Route::get('/slider/delete/{id}',[SliderController::class, 'delete'])->name('delete.slider');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
