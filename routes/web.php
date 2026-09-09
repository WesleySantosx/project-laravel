<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('sobre', function () {
    return "sobre";
});
Route::get('alunos', function () {
    return view('alunos.index');
});
Route::get('contatos', function () {
    return "contatos";
});

Route::get('produto{id}', function ($id) {
    return "produto: {$id}";
});
Route::get('usuario{id}', function ($id) {
    return "usuario: {$id}";
});
Route::get('categoria{id}', function ($id) {
    return "categoria: {$id}";
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

Route::get('alunos.create', function () {
    return view('alunos.create');
});
