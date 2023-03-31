<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
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
})->name('home.index');

Route::get('/internationale', function () {
    return view('clients.pages.menu');
})->name('menu');

Route::get('/contact', function () {
    return view('clients.pages.contact');
})->name('contact');
//reservation route

Route::post('reservation/store',[ReservationController::class,'store'])->name('reservation.store');




//admin routes
Route::middleware(['auth','is_admin'])->group(function () {
    Route::get('/reservation', [ReservationController::class,'index'])->name('dashboard');
       Route::get('/reservation/deleted', [ReservationController::class,'deletedReservation'])->name('deleted.res');
    Route::get('/reservation/restor/{id}', [ReservationController::class,'restorReservation'])->name('restor.res');
    Route::get('/reservation/{id}/details', [ReservationController::class,'show'])->name('reservation.show');
    Route::post('/reservation/{id}/delete', [ReservationController::class,'delete'])->name('reservation.delete');
    Route::post('/reservation/{id}/reject', [ReservationController::class,'reject'])->name('reservation.reject');
    Route::post('/reservation/{id}/confirm', [ReservationController::class,'confirm'])->name('reservation.confirm');
    Route::delete('/reservation/multiple/delete', [ReservationController::class,'destroy'])->name('reservation.destroy');
    Route::delete('/reservation/multiple/hard/delete', [ReservationController::class,'hard_destroy'])->name('reservation.hard.delete');
    Route::get('/reservation/{id}/edit', [ReservationController::class,'edit'])->name('reservation.edit');
    Route::put('/reservation/{id}/update', [ReservationController::class,'update'])->name('reservation.update');
    Route::post('/reservation/export',[ReservationController::class,'export'])->name('reservation.export');
});


Route::get('/resa/{origin?}', function ($origin = 'direct') {
    $minutes = 15;

    if(Cookie::get('lenaraya_origin')){
        $origin = Cookie::get('lenaraya_origin');
        return view('clients.pages.reservation',compact('origin'));

    }else{
        Cookie::queue('lenaraya_origin', $origin, $minutes);
    }

    return view('clients.pages.reservation',compact('origin'));
})->name('reservation');