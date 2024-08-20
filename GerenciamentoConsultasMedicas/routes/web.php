<?php

use App\Http\Controllers\PacienteController;
use App\Models\Paciente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Rota para mostrar o form de login
Route::get('/login', [PacienteController::class, 'showLoginForm'])->name('usuario.login');
// Rota para processar o formulário
Route::post('/login', [PacienteController::class, 'login'])->name('usuarios.login');


// Rota para exibir o formulário de registro
Route::get('/registro', [PacienteController::class, 'showRegistroForm'])->name('usuarios.registro');
// Rota para processar o registro
Route::post('/registro', [PacienteController::class, 'registro'])->name('usuarios.registro');