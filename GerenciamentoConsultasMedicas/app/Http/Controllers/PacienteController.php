<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Rules\Cpf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showCadastroForm()
    {
        return view('usuarios.cadastro');
    }

    public function showLoginForm()
    {
        return view('usuarios.login');
    }

    // Processar cadastro de paciente
    public function cadastro(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:pacientes,email',
            'password' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'cpf' => 'required|string|max:14|unique:pacientes,cpf',
            'observacao' => 'nullable|string|max:255'
        ]);

        // Criação do novo paciente
        $paciente = Paciente::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
            'telefone' => $request->input('telefone'),
            'cpf' => $request->input('cpf'),
            'observacao' => $request->input('observacao'),
        ]);

        // Redirecionar com uma mensagem de sucesso
        return redirect('/login')->with('success', 'Paciente cadastrado com sucesso!');
    }



    // Processar Login de paciente
    public function login(Request $request)
    {
        // Validações para o login
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // // Tenta autenticar com o guard 'usuario'
        if (Auth::guard('usuario')->attempt($credentials)) {
            $request->session()->regenerate(); // Regenera a sessão para evitar fixação de sessão
            return redirect('dashboard  ');
        }


        // // Verificar as credenciais do usuário
        // if (Auth::attempt([
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password')
        // ])) {
        //     // Autenticação bem-sucedida
        //     return redirect()->intended('/');
        // }

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
