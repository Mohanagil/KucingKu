<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdopterController;
use App\Http\Controllers\KucingController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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


# route untuk main
Route::prefix('/')->name('main.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/about',[MainController::class,'about'])->name('about');
    Route::get('/kontak',[MainController::class,'kontak'])->name('kontak');
    Route::get('/donasi',[MainController::class,'donasi'])->name('donasi');
    Route::get('/adopt',[MainController::class,'adopt'])->name('adopt');
    Route::get('/list-blog',[MainController::class,'blog'])->name('blog');
    Route::get('/list-kucing',[MainController::class,'kucing'])->name('kucing');
    Route::get('/kucing-detail/{id?}',[MainController::class,'detailkucing'])->name('kucing_selengkapnya');
    Route::get('/blog-detail/{id?}',[MainController::class,'detailblog'])->name('blog_selengkapnya');
});


# route untuk kucing admin
Route::prefix('/kucing')->name('kucing.')->middleware('auth')->group(function () {
    Route::get('/', [KucingController::class, 'index'])->name('index');
    Route::get('/data',[KucingController::class,'data'])->name('data');
    Route::get('/create', [KucingController::class, 'create'])->name('tambah');
    Route::get('/edit/{id?}', [KucingController::class, 'edit'])->name('edit');
    Route::get('/show/{id?}', [KucingController::class, 'show'])->name('detail');
    Route::put('/update/{id?}', [KucingController::class, 'update'])->name('update');
    Route::get('/delete/{id?}', [KucingController::class, 'destroy'])->name('destroy');
    Route::post('/store', [KucingController::class, 'store'])->name('store');
});

# route untuk blog admin
Route::prefix('/blog')->name('blog.')->middleware('auth')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/data',[BlogController::class,'data'])->name('data');
    Route::get('/create', [BlogController::class, 'create'])->name('tambah');
    Route::get('/edit/{id?}', [BlogController::class, 'edit'])->name('edit');
    Route::put('/update/{id?}', [BlogController::class, 'update'])->name('update');
    Route::get('/show/{id?}', [BlogController::class, 'show'])->name('detail');
    Route::get('/delete/{id?}', [BlogController::class, 'destroy'])->name('destroy');
    Route::post('/store', [BlogController::class, 'store'])->name('store');
});

# route untuk adopter
Route::prefix('/adopter')->name('adopter.')->middleware('auth')->group(function () {
    Route::get('/', [AdopterController::class, 'index'])->name('index');
    Route::get('/data',[AdopterController::class,'data'])->name('data');
    Route::get('/show/{id?}', [AdopterController::class, 'show'])->name('detail');
    Route::get('/delete/{id?}', [AdopterController::class, 'destroy'])->name('destroy');
    Route::post('/store', [AdopterController::class, 'store'])->name('store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# route untuk admin
Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});



