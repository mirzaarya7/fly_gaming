<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/kalkulator/cek-wr',[HomeController::class,'wr'])->name('wr_ml');
Route::get('/kalkulator/cek-zodiak',[HomeController::class,'zodiak'])->name('zodiak_ml');