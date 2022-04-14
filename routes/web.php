<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\AdvertisementSizeController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\NewspaperController;
use App\Http\Controllers\SupplementController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('institution', InstitutionController::class);
    Route::resource('advertisement', AdvertisementController::class);
    Route::resource('advertisement-size', AdvertisementSizeController::class);
    Route::resource('newspaper', NewspaperController::class);
    Route::resource('supplement', SupplementController::class);
});
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Route::group(['middleware' => 'auth:sanctum'], function() {
    
// });