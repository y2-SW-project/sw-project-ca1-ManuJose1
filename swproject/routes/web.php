<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Homepage for the admins
Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
//Homepage for the  users
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

//Welcome page
Route::get('/welcome', [App\Http\Controllers\PageController::class, 'welcome'])->name('welcome');
//About page
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

//Page to make a booking
Route::get('/makebooking', [App\Http\Controllers\PageController::class, 'about'])->name('makebooking');

//Page for the list of bookings that have been made
Route::get('/user/bookings', [App\Http\Controllers\User\BookingController::class, 'index'])->name('user.bookings.index');
//Page with further details on each booking
Route::get('/user/bookings/{id}', [App\Http\Controllers\User\BookingController::class, 'show'])->name('user.bookings.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
