<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mysite', [TestController::class,'mysite']) ->name('mysite');

Route::get('/contacts',[TestController::class,'contacts']) ->name('contacts') ;
