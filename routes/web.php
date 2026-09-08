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

Route::get('produto{id}', function ($id){
    return "produto: {$id}"; 
});
Route::get('usuario{id}', function ($id){
    return "usuario: {$id}"; 
});
Route::get('categoria{id}', function ($id){
    return "categoria: {$id}"; 
});
