<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
        
        
Route::get('/home', [HomeController::class,'index']);

Route::get('dashboard', [DashboardController::class, 'index'])
		->name('dashboard');

Route::resource('pelanggan', PelangganController::class);

