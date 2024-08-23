@extends('layouts.app')

@section('content')
    {{-- formulário --}}
    <div class="body-agendamento">

        <h1>Agendar Consulta</h1>

        <form action="{{ route('usuarios.agendamento') }}" method="POST">
            @csrf

            {{-- <label for="cpf_paciente">CPF do Paciente:</label>
            <input type="text" id="cpf_paciente" name="cpf_paciente" required> --}}

            <label for="cpf_medico">Escolha o Médico:</label>
            <select id="cpf_medico" name="cpf_medico" required>

                    <option value="{{ auth()->user()->nome }}"></option>

            </select>

            <label for="data_hora">Data e Hora:</label>
            <input type="datetime-local" id="data_hora" name="data_hora" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao"></textarea>

            <button type="submit">Agendar</button>
        </form>
    </div>
@endsection
