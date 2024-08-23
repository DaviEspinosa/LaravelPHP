@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <div class="container-dashboard">

        <div class="card-body">
            <p><strong>Olá,</strong> {{ auth()->user()->nome }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        </div>

        <a class="add-consulta" href="/">+</a>
    </div>
@endsection
