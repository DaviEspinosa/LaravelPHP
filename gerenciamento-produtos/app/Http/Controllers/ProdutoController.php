<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produtos::all();
        return view('produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'requierd',
            'preco'=>'required|decimal'
        ]);
        
        Produtos::create($request->all());
        return redirect()->route('produtos.index') ->with('success', 'Produto criado com sucesso.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('produto.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, Produtos $produto)
    {
        $request->validate([
            'nome'=>'requierd',
            'preco'=>'required|decimal'
        ]);
        $produto->update($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Produtos $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto Deletado com Sucesso.');

    }
}
