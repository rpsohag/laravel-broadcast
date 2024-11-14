<?php

use App\Http\Controllers\BroadcastController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-message',[BroadcastController::class,'index']);
Route::post('send-message',[BroadcastController::class,'send'])->name('send_message');