<?php

use App\Http\Controllers\KucingController;
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

Route::get('/', function () {
    return view('main.index');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/about', function () {
    return view('main.about');
});

# route untuk kucing
Route::prefix('/kucing')->name('kucing.')->group(function () {
    Route::get('/', [KucingController::class, 'index'])->name('index');
    Route::get('/create', [KucingController::class, 'create'])->name('tambah');
    Route::get('/edit', [KucingController::class, 'edit'])->name('edit');
    Route::post('/store', [KucingController::class, 'store'])->name('store');
});
