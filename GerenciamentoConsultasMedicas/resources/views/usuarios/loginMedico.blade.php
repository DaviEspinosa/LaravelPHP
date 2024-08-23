@extends('layouts.app')

@section('content')
    {{-- formulário --}}
    <div class="body-login">
        <div class="container-login">
            <h1>Login Médico</h1>

            {{-- Mensagens de sucesso ou erro --}}

            <form method="POST" action="{{ route('usuarios.loginMedico') }}">
                @csrf

                <div class="form-input">
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}"
                        required>
                    {{-- @error('cpf')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

                    <input type="password" name="password" class="form-control" placeholder="Senha"
                        value="{{ old('password') }}" required>
                    {{-- @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
@endsection
