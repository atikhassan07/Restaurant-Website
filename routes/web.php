<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SpecialcategoryController;
use App\Http\Controllers\Admin\SpecialpartController;
use App\Http\Controllers\Admin\WhychoosseController;
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
Route::post('reservation/store',[ReservationController::class, 'ReservationStore'])->name('reservation.store');




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

//Why Part
    Route::get('why/info', [WhychoosseController::class, 'whyInfo'])->name('why.info');
    Route::get('why/info/add', [WhychoosseController::class, 'add'])->name('why.info.add');
    Route::post('why/info/store', [WhychoosseController::class, 'store'])->name('why.info.store');
    Route::get('why/info/edit/{id}', [WhychoosseController::class, 'edit'])->name('why.info.edit');
    Route::post('why/info/update/{id}', [WhychoosseController::class, 'update'])->name('why.info.update');
    Route::get('why/info/delete/{id}', [WhychoosseController::class, 'delete'])->name('why.info.delete');

//Special Category
    Route::get('special/category', [SpecialcategoryController::class, 'specialCategory'])->name('special.category');
    Route::get('special/category/add', [SpecialcategoryController::class, 'add'])->name('special.category.add');
    Route::post('special/category/store', [SpecialcategoryController::class, 'store'])->name('special.category.store');
    Route::get('special/category/edit/{id}', [SpecialcategoryController::class, 'edit'])->name('special.category.edit');
    Route::post('special/category/update/{id}', [SpecialcategoryController::class, 'update'])->name('special.category.update');
    Route::get('special/category/delete/{id}', [SpecialcategoryController::class, 'delete'])->name('special.category.delete');

//Special Items
    Route::get('special/items', [SpecialpartController::class, 'specialItems'])->name('special.items');
    Route::get('special/items/add', [SpecialpartController::class, 'add'])->name('special.items.add');
    Route::post('special/items/store', [SpecialpartController::class, 'store'])->name('special.items.store');
    Route::get('special/items/edit/{id}', [SpecialpartController::class, 'edit'])->name('special.items.edit');
    Route::post('special/items/update/{id}', [SpecialpartController::class, 'update'])->name('special.items.update');
    Route::get('special/items/delete/{id}', [SpecialpartController::class, 'delete'])->name('special.items.delete');

    //Page Contact Information
    Route::get('contact/info', [SettingController::class, 'contactInfo'])->name('contact.info');
    Route::post('contact/info/update', [SettingController::class, 'update'])->name('contact.update');
    Route::get('website/logo', [SettingController::class, 'logo'])->name('wesite.logo');
    Route::post('update/logo', [SettingController::class, 'Updatelogo'])->name('update.logo');
    Route::post('update/footer/logo', [SettingController::class, 'Updatelogo'])->name('update.footer.logo');
    Route::get('add/social', [SettingController::class, 'addSocial'])->name('add.social');
    Route::post('store/social', [SettingController::class, 'storeSocial'])->name('store.scoial');
    Route::get('delete/social/{id}', [SettingController::class, 'deleteSocial'])->name('delete.scoial');




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
