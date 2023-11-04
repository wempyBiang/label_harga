<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/lebel-harga', function () {
    return view('lebelHarga');
});

Route::post('/lebel-harga', [LabelController::class, 'show']);

Route::get('/input-data', function () {
    return view('inputData');
});

Route::post('/input-data', [BarangController::class, "import"]);

Route::get('/lebel-database', function () {
    return view('lebelDatabase');
});


Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});