<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LockerController;

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

Route::get('/',[LockerController::class,'index'])->name('lock');
Route::get('/lockers', [LockerController::class, 'fetchLockers'])->name('lockers.fetch');
Route::post('/data/store', [LockerController::class, 'store'])->name('data.store');
Route::post('/userdata/fatch', [LockerController::class, 'userdatafatch'])->name('userdata.fatch');
Route::post('/userdata/defuse', [LockerController::class, 'defuseKey'])->name('userdata.defuse');
