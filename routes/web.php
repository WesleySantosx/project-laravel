<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('sobre', function (){
    return "sobre"; 
});
Route::get('alunos', function (){
    return "alunos"; 
});
Route::get('contatos', function (){
    return "contatos"; 
});