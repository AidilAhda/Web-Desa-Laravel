<?php

use Illuminate\Support\Facades\Route;

// import all controller
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\PerangkatDesaController;

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
    Route::get('/dashboard',  [DataPendudukController::class,'dashboard']);
    
    //  fitur profile
    Route::get('/profile', function () {
        return view('admin.profile', ['type_menu' => 'profile']);
    });
    
    //berita
    Route::resource('/beritas', BeritaController::class);
    Route::get('/berita/cekSlug', [BeritaController::class,'cekSlug']);
    // Route::get('/beritas/{berita:slug}', [BeritaController::class,'show']);
    
    //KATEGORI  
    Route::resource('/categories', CategoryController::class);
    
    // DATA PENDUDUK    
    Route::resource('/data_penduduks', DataPendudukController::class);

    // JABATAN    
    Route::resource('/jabatans', JabatanController::class);

    // Perangkat Desa    
    Route::resource('/perangkat_desas', PerangkatDesaController::class);
    Route::get('/update_status/{perangkatDesa}', [PerangkatDesaController::class,'updateStatus']);

    
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