<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;


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
    return view('clients.home');
});

Route::get('/international', function () {
    return view('clients.pages.internationale');
})->name('internationale');

Route::get('/cuisine-japonais', function () {
    return view('clients.pages.cuisine-japonais');
})->name('cuisine-japonais');

Route::get('/nos-spectacles', function () {
    return view('clients.pages.nos-spectacles');
})->name('nos-spectacles');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//reservation route

Route::post('reservation/store',[ReservationController::class,'store'])->name('reservation.store');