<?php

use App\Http\Controllers\AlunoController;
use App\Models\Aluno;
use App\Models\Professor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alunos', AlunoController::class);

Route::get('professores/alunos', function () {
    $professors = Professor::with('alunos')->get();

    return view('professores.alunos', compact('professors'));
});

Route::get('app', function () {
    return view('layouts.app');
});

Route::get('menu', function () {
    return view('partials.menu');
});

Route::get('home', function () {
    return view('home');
});
