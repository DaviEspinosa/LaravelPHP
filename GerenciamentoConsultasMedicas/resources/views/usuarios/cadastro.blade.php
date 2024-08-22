@extends('layouts.app')

@section('content')
{{-- formulário --}}
<div class="container">
    <h1>Cadastre-se</h1>

    {{-- Mensagens de sucesso ou erro --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('usuarios.cadastro') }}">
        @csrf

        <div class="form-group">
            <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}" required>
            @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Senha" value="{{ old('password') }}" required>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="tel" name="telefone" class="form-control" placeholder="Telefone" value="{{ old('telefone') }}" required>
            @error('telefone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" name="cpf" class="form-control" placeholder="CPF" value="{{ old('cpf') }}" required>
            @error('cpf')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" name="observacao" class="form-control" placeholder="Observação" value="{{ old('observacao') }}">
            @error('observacao')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Registrar-se</button>
    </form>
</div>
@endsection
