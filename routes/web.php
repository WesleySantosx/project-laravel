<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('alunos', AlunoController::class);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/alunos', function () {
        return response()->json([
            'message' => 'Área administrativa do sistema.',
        ]);
    });
});

Route::middleware(['auth', 'role:admin,professor'])->group(function () {
    Route::get('/professor/alunos', function () {
        return response()->json([
            'message' => 'Área do professor.',
        ]);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
