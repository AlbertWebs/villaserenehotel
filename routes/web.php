<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CredentialController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\Auth\LoginController;


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


Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('front.contact');
Route::get('/bookings', [HomeController::class, 'bookings'])->name('front.bookings');
Route::get('/bookings/{slung}', [HomeController::class, 'booking'])->name('front.booking');





Route::get('/about-us', [HomeController::class, 'about'])->name('front.about');
Route::get('/copyright-statement', [HomeController::class, 'copyright'])->name('front.copyright');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('front.policy');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('front.terms');

Route::get('/book-now', [PaymentsController::class, 'payment'])->name('initiate-payment');

// Payments

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->middleware('is_admin');



Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [AdminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

    Route::get('new-booking', [BookingController::class, 'create'])->name('admin.new.booking')->middleware('is_admin');
    Route::post('store-booking', [BookingController::class, 'store'])->name('admin.store.booking')->middleware('is_admin');
    Route::post('update-booking/{id}', [BookingController::class, 'update'])->name('admin.update.booking')->middleware('is_admin');
    Route::get('view-booking', [BookingController::class, 'index'])->name('admin.view.booking')->middleware('is_admin');
    Route::get('delete-booking/{id}', [BookingController::class, 'destroy'])->name('admin.delete.booking')->middleware('is_admin');
    Route::get('edit-booking/{id}', [BookingController::class, 'edit'])->name('admin.edit.booking')->middleware('is_admin');

    Route::get('new-room', [RoomController::class, 'create'])->name('admin.new.room')->middleware('is_admin');
    Route::post('store-room', [RoomController::class, 'store'])->name('admin.store.room')->middleware('is_admin');
    Route::post('update-room/{id}', [RoomController::class, 'update'])->name('admin.update.room')->middleware('is_admin');
    Route::get('view-room', [RoomController::class, 'index'])->name('admin.view.room')->middleware('is_admin');
    Route::get('delete-room/{id}', [RoomController::class, 'destroy'])->name('admin.delete.room')->middleware('is_admin');
    Route::get('edit-room/{id}', [RoomController::class, 'edit'])->name('admin.edit.room')->middleware('is_admin');

    Route::post('update-setting', [SettingController::class, 'update'])->name('admin.update.setting')->middleware('is_admin');
    Route::get('edit-setting', [SettingController::class, 'edit'])->name('admin.edit.setting')->middleware('is_admin');

    Route::get('edit-logo', [SettingController::class, 'edit'])->name('admin.edit.logo')->middleware('is_admin');

    Route::post('update-credential', [CredentialController::class, 'update'])->name('admin.update.credential')->middleware('is_admin');
    Route::get('edit-credential', [CredentialController::class, 'edit'])->name('admin.edit.credential')->middleware('is_admin');

    Route::post('update-about', [AboutController::class, 'update'])->name('admin.update.about')->middleware('is_admin');
    Route::get('edit-about', [AboutController::class, 'edit'])->name('admin.edit.about')->middleware('is_admin');
    Route::get('edit-welcome', [AboutController::class, 'edit_welcome'])->name('admin.edit.welcome')->middleware('is_admin');
    Route::get('edit-copyright', [AboutController::class, 'edit_copyright'])->name('admin.edit.copyright')->middleware('is_admin');

    Route::get('view-term', [AboutController::class, 'edit_term'])->name('admin.view.term')->middleware('is_admin');
    Route::post('update-term', [AboutController::class, 'update'])->name('admin.update.term')->middleware('is_admin');
    Route::get('edit-term', [AboutController::class, 'edit'])->name('admin.edit.term')->middleware('is_admin');

    Route::get('view-privacy', [AboutController::class, 'edit_privacy'])->name('admin.view.privacy')->middleware('is_admin');
    Route::post('update-privacy', [AboutController::class, 'update'])->name('admin.update.privacy')->middleware('is_admin');
    Route::get('edit-privacy', [AboutController::class, 'edit'])->name('admin.edit.privacy')->middleware('is_admin');

    Route::get('new-file', [FileController::class, 'create'])->name('admin.new.file')->middleware('is_admin');
    Route::post('store-file', [FileController::class, 'store'])->name('admin.store.file')->middleware('is_admin');
    Route::post('update-file/{id}', [FileController::class, 'update'])->name('admin.update.file')->middleware('is_admin');
    Route::get('view-file', [FileController::class, 'index'])->name('admin.view.file')->middleware('is_admin');
    Route::get('view-file-list', [FileController::class, 'index_list'])->name('admin.list.file')->middleware('is_admin');
    Route::get('delete-file/{id}', [FileController::class, 'destroy'])->name('admin.delete.file')->middleware('is_admin');
    Route::get('edit-file/{id}', [FileController::class, 'edit'])->name('admin.edit.file')->middleware('is_admin');
});

// Route::post('/make-payment','PaymentsController@payment');
Route::group(['prefix' => '/webhooks'], function () {
    //PESAPAL
    Route::get('donepayment', [App\Http\Controllers\PaymentsController::class, 'paymentsuccess'])->name('paymentsuccess');
    Route::get('paymentconfirmation', [App\Http\Controllers\PaymentsController::class, 'paymentconfirmation']);
});



