<?php

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Rota para mostrar o form de login
Route::get('/login', [PacienteController::class, 'showLoginForm'])->name('usuarios.login');
// Rota para processar o formulário
Route::post('/login', [PacienteController::class, 'login'])->name('usuarios.login');


// Rota para exibir o formulário de registro
Route::get('/cadastro', [PacienteController::class, 'showCadastroForm'])->name('usuarios.cadastro');
// Rota para processar o registro
Route::post('/cadastro', [PacienteController::class, 'cadastro'])->name('usuarios.cadastro');


// Rota para mostrar o form de login
Route::get('/loginMedico', [MedicoController::class, 'showLoginMedicoForm'])->name('usuarios.loginMedico');
// Rota para processar o formulário
Route::post('/loginMedico', [MedicoController::class, 'loginMedico'])->name('usuarios.loginMedico');