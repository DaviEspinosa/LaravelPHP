@extends('layouts.app')

@section('content')
{{-- formulário --}}
<div class="container">
    <h1>Login Médico</h1>

    {{-- Mensagens de sucesso ou erro --}}

    <form method="POST" action="{{ route('usuarios.loginMedico') }}">
        @csrf

        <div class="form-group">
            <input type="text" name="cpf" class="form-control" placeholder="CPF" value="{{ old('cpf') }}" required>
            @error('cpf')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Senha" value="{{ old('password') }}" required>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
@endsection
