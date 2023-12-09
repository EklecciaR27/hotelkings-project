<?php

use App\Models\Guest;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ReservasiController;

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

Route::get('/', function () {
    return view('landing');
})->name('landing');

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/user/home', function () {
    return view('welcome');
})->name('user.home');

Route::get('/user/theroom', function () {
    return view('theroom');
})->name('user.theroom');

Route::get('/user/resort', function () {
    return view('resort');
})->name('user.resort');

Route::get('/user/dining', function () {
    return view('dining');
})->name('user.dining');

Route::post('/import-reservasi', [ImportController::class, 'importReservasi'])->name('import.reservasi');

Route::get('/auth/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::post('/auth/register/action', [ AuthController::class, 'registerAction' ])->name('auth.register.action');

Route::get('/data/home', function () {
    return view('datahotel.homeadmin',
    [
        "reservasi" => Reservasi::all(),
        "guest" => Guest::all(),
    ]
);
})->name('datahotel.homeadmin')->middleware('auth');



Route::get('/data/reservasi', function () {
    return view('datahotel.reservasi',
    [
    "reservasi" => Reservasi::all(),
    ]);
})->name('datahotel.reservasi')->middleware('auth');

Route::get('/data/guest', function () {
    return view('datahotel.guest', [
    "guest" => Guest::all()
    ]);
})->name('datahotel.guest')->middleware('auth');

Route::get('/auth/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::post('/auth/login/action', [
    AuthController::class, 'loginAction'
])->name('login.action');

Route::get('/logout', [
    AuthController::class, 'logout'
])->name('logout');

Route::controller(ReservasiController::class)->group(function(){
    Route::get('/data/reservasi/create', 'create')->name('datahotel.crud.create');
    Route::post('/data/reservasi/create/action','store')->name('datahotel.store');
    Route::get('/data/reservasi/edit/{id}', 'edit')->name('datahotel.crud.edit');
    Route::post('/data/reservasi/edit/{id}/action', 'update')->name('datahotel.update');
    Route::post('/data/reservasi/delete/{id}/action', 'delete')->name('datahotel.delete');
    Route::get('/data/reservasi/download_excel', 'downloadExcel')->name('datahotel.download');
    Route::get('/data/reservasi/search', 'search')->name('datahotel.search');
});

Route::controller(GuestController::class)->group(function(){
    Route::get('/data/guest/create', 'create')->name('datahotel.guest.create');
    Route::post('/data/guest/create/action','store')->name('datahotel.guest.store');
    Route::post('/data/guest/delete/{id}/action', 'delete')->name('datahotel.guest.delete');

});



