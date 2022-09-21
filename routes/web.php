<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin/', [AdminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::group(['prefix'=>'admin'], function(){
    Route::get('new-booking', [BookingController::class, 'create'])->name('admin.new.booking')->middleware('is_admin');
    Route::post('store-booking', [BookingController::class, 'store'])->name('admin.store.booking')->middleware('is_admin');
    Route::post('update-booking', [BookingController::class, 'update'])->name('admin.update.booking')->middleware('is_admin');
    Route::get('view-booking', [BookingController::class, 'index'])->name('admin.view.booking')->middleware('is_admin');
    Route::get('delete-booking/{id}', [BookingController::class, 'destroy'])->name('admin.delete.booking')->middleware('is_admin');
    Route::get('edit-booking/{id}', [BookingController::class, 'edit'])->name('admin.edit.booking')->middleware('is_admin');


    Route::get('new-room', [BookingController::class, 'create'])->name('admin.new.room')->middleware('is_admin');
    Route::post('store-room', [BookingController::class, 'store'])->name('admin.store.room')->middleware('is_admin');
    Route::post('update-room', [BookingController::class, 'update'])->name('admin.update.room')->middleware('is_admin');
    Route::get('view-room', [BookingController::class, 'index'])->name('admin.view.room')->middleware('is_admin');
    Route::get('delete-room/{id}', [BookingController::class, 'destroy'])->name('admin.delete.room')->middleware('is_admin');
    Route::get('edit-room/{id}', [BookingController::class, 'edit'])->name('admin.edit.room')->middleware('is_admin');
});

