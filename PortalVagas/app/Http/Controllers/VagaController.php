<?php

namespace App\Http\Controllers;

use App\Models\Vagas;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vagas = Vagas::all();
        return view('vagas.index',compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vagas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo'=> 'required|max:100',
            'descricao'=>'required',
            'localizacao'=> 'required',
            'salario'=>'required|numeric',
            'empresa'=>'required',
        ]);
        Vagas::create($dados);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('vagas.edit', compact('vaga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vagas $vagas)
    {
        $dados = $request->validate([
            'titulo'=> 'required|max:100',
            'descricao'=>'required',
            'localizacao'=> 'required',
            'salario'=>'required|numeric',
            'empresa'=>'required',
        ]);
        $vagas->update($dados);

        return redirect()->route('vagas.index')->with('success', 'Vaga atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vagas $vagas)
    {
        
        $vagas->delete($vagas);

        return redirect()->route('vagas.index')->with('success', 'Vaga atualizada com sucesso');
    }
}
