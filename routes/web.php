<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataPendudukController;

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


Route::get('/',  [BlogController::class,'index'])->name('blog');


Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard',  [DataPendudukController::class,'index']);
    
    //  fitur profile
    Route::get('/profile', function () {
        return view('admin.profile', ['type_menu' => 'profile']);
    });

    //data penduduk
    Route::get('/data_penduduk', [DataPendudukController::class,'show']);
    
    //berita
    Route::resource('/beritas', BeritaController::class);
    Route::get('/berita/cekSlug', [BeritaController::class,'cekSlug']);
    // Route::get('/beritas/{berita:slug}', [BeritaController::class,'show']);
    
    //KATEGORI  
    Route::resource('/categories', CategoryController::class);
    
});



//  fitur berita
Route::get('/search', [BeritaController::class,'search']);
Route::get('/detailBerita/{berita:slug}', [BeritaController::class,'detailBerita']);

//kategori
Route::get('/kategori/{category:nama}', [CategoryController::class,'show']);


//  LOGIN
Route::get('/login',[LoginController::class,'index'] )->name('login');
Route::post('/login',[LoginController::class,'authenticate'] );
Route::post('/logout',[LoginController::class,'logout'] );