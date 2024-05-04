<?php


use App\Livewire\LwKapkara;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/{act}', LwKapkara::class);
