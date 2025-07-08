<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Abou Us";
});

Route::get('/main/{value}', [MainController::class, 'index']); //{value} permite passar variaveis
