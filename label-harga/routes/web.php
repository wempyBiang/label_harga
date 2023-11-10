<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\InputKode;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\LebelDatabase;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestDatabase;
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

Route::post('/lebel-database', [LebelDatabase::class, "show"]);

Route::get('/input-kode', function () {
    return view('inputKode');
});

Route::post("/input-kode", [InputKode::class, "show"]);

Route::get('/test-database', function () {
    return view('testDatabse');
});

Route::post("/test-database", [TestDatabase::class, "show"]);

