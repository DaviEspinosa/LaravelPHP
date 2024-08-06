<!-- Herdando as configurações do Layouts/master.blade -->
@extends('layouts.master')
<!-- Para identificar que o conteúdo da página está começando a partir de agora -->
@section('content')

<div class="container">
    <h1 class="my-4">Detalhes do Produto</h1>

    <div class="form-group">
        <strong>Nome:</strong>
        {{ $produto->nome }}
    </div>

    <div class="form-group">
        <strong>Descrição:</strong>
        {{ $produto->descricao }}
    </div>

    <div class="form-group">
        <strong>Preço:</strong>
        {{ $produto->preco }}
    </div>

    <a class="btn btn-primary" href="{{ route('produtos.index') }}">Voltar</a>
</div>
