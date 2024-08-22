@extends('layouts.app')

@section('content')
{{-- formulário --}}
<div class="container">
    <h1>Login</h1>

    {{-- Mensagens de sucesso ou erro --}}

    <form method="POST" action="{{ route('usuarios.login') }}">
        @csrf


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

        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
@endsection
