<?php

use BasementChat\Basement\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/messages', MessagesController::class)->name('messages');
});

/*
Route::group(['middleware' => ['auth']], function(){
	Route::get('/messages', [MessagesController::class])->name('messages');
});
*/