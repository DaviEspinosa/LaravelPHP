<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');//Esta parte do código garante que somente usuários logados possam acessar a rota /dashboard.


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


// Rota para mostrar o form de login
Route::get('/agendar', [ConsultaController::class, 'showAgendamentoForm'])->name('usuarios.agendamento');
// Rota para processar o formulário
Route::post('/agendar', [ConsultaController::class, 'agendarConsulta'])->name('usuarios.agendamento');
