<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Medico;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showAgendamentoForm()
    {
        return view('usuarios.agendamento');
    }

    // Armazena a consulta no banco de dados
    public function agendarConsulta(Request $request)
    {
        $request->validate([
            'cpf_paciente' => 'required|string',
            'cpf_medico' => 'required|string',
            'data_hora' => 'required|date',
            'descricao' => 'nullable|string',
        ]);

        Consulta::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Consulta agendada com sucesso!');
    }


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
