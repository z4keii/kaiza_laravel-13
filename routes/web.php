<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;
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
