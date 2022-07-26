<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\nilaicontroller;
use App\Http\Controllers\jurusancontroller;
use App\Http\Controllers\walicontroller;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('post',PostController::class);

Route::resource('siswa',siswacontroller::class);

Route::resource('wali', waliController::class);

Route::resource('nilai',nilaicontroller::class);

Route::resource('jurusan',jurusancontroller::class);

Route::get('/test-admin',function(){

    return view('layouts.admin');
});

Route::get('/hallo',function(){

    return view('hallo');
});

Route::get('/home2',function(){

    return view('TampilanUser.home',[
        "title" => "Home"
    ]);
});

Route::get('/zakat',function(){

    return view('TampilanUser.zakat',[
        "title" => "Zakat"
    ]);
});

Route::get('/sedekah',function(){

    return view('TampilanUser.sedekah',[
        "title" => "Sedekah"
    ]);
});

Route::get('/infaq',function(){

    return view('TampilanUser.infaq',[
        "title" => "Infaq"
    ]);
});

Route::get('/donasi',function(){

    return view('TampilanUser.donasi',[
        "title" => "Donasi"
    ]);

});

