<?php

namespace App\Http\Controllers;

use App\Rules\Cpf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicoController extends Controller
{

// ===========================================================
// O Médico já Estaria cadastrado em meu banco, com o insert |
// ===========================================================

public function showLoginMedicoForm()
{
    return view('usuarios.loginMedico');
}

public function loginMedico(Request $request)
{
    // Validações para o login
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // // Tenta autenticar com o guard 'usuario'
    if (Auth::guard('usuario')->attempt($credentials)) {
        $request->session()->regenerate(); // Regenera a sessão para evitar fixação de sessão
        return redirect('dashboard');
    }

}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
