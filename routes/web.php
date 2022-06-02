<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\KucingController;
use App\Http\Controllers\MainController;
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

# route untuk main
Route::prefix('/')->name('main.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/about',[MainController::class,'about'])->name('about');
    Route::get('/kontak',[MainController::class,'kontak'])->name('kontak');
    Route::get('/donasi',[MainController::class,'donasi'])->name('donasi');
    Route::get('/adopter',[MainController::class,'adopter'])->name('adopter');
    Route::get('/blog',[MainController::class,'blog'])->name('blogs');
    Route::get('/list-kucing',[MainController::class,'kucing'])->name('kucing');
});


# route untuk kucing admin
Route::prefix('/kucing')->name('kucing.')->group(function () {
    Route::get('/', [KucingController::class, 'index'])->name('index');
    Route::get('/data',[KucingController::class,'data'])->name('data');
    Route::get('/create', [KucingController::class, 'create'])->name('tambah');
    Route::get('/edit/{id?}', [KucingController::class, 'edit'])->name('edit');
    Route::put('/update/{id?}', [KucingController::class, 'update'])->name('update');
    Route::get('/delete/{id?}', [KucingController::class, 'destroy'])->name('destroy');
    Route::post('/store', [KucingController::class, 'store'])->name('store');
});

# route untuk blog admin
Route::prefix('/blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/data',[BlogController::class,'data'])->name('data');
    Route::get('/create', [BlogController::class, 'create'])->name('tambah');
    Route::get('/edit/{id?}', [BlogController::class, 'edit'])->name('edit');
    Route::put('/update/{id?}', [BlogController::class, 'update'])->name('update');
    Route::get('/delete/{id?}', [BlogController::class, 'destroy'])->name('destroy');
    Route::post('/store', [BlogController::class, 'store'])->name('store');
});
