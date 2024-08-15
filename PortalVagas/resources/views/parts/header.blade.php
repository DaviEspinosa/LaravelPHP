{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}

<header>

    <div>
        <a href="/login">Login</a>
        <a href="/registro">Registra-se</a>
    </div>

    @if (Auth::check())
        <div>
            <h3>
                Olá, {{Auth::user()->nome}}
            </h3>
        </div>
        <div>
            <form action="/logout" method="post">
            @csrf
            <input type="submit" placeholder="sair">
            </form>
        </div>
    @endif
</header>