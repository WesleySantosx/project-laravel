<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alunos', AlunoController::class);

Route::get('app', function () {
    return view('layouts.app');
});

Route::get('menu', function () {
    return view('partials.menu');
});

Route::get('home', function () {
    return view('home');
});
