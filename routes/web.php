<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\MenuController;
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


//Menu Route
Route::group(['prefix' => 'dashboard'],function(){
    Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
    Route::get('/menu/add', [MenuController::class, 'add'])->name('add.menu');
    Route::post('/menu/store', [MenuController::class, 'store'])->name('store.menu');
    Route::get('/menu/edit/{id}',[MenuController::class, 'edit'])->name('edit.menu');
    Route::get('/menu/delete/{id}',[MenuController::class, 'delete'])->name('delete.menu');

//Item Routes
    Route::get('item', [ItemController::class, 'item'])->name('item');
    Route::get('add/item', [ItemController::class, 'add'])->name('add.item');
    Route::post('store/item', [ItemController::class, 'store'])->name('store.item');
    Route::get('/item/edit/{id}',[ItemController::class, 'edit'])->name('edit.item');
    Route::post('update/item/{id}', [ItemController::class, 'update'])->name('update.item');
    Route::get('/item/delete/{id}',[ItemController::class, 'delete'])->name('delete.item');



});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
