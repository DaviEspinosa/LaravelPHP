<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {

            $table->id();
            
            // Definindo a coluna cpf_paciente e a chave estrangeira
            $table->string('cpf_paciente', 11);
            $table->foreign('cpf_paciente')->references('cpf')->on('pacientes')->onDelete('cascade');

            // Definindo a coluna cpf_medico e a chave estrangeira
            $table->string('cpf_medico', 11);
            $table->foreign('cpf_medico')->references('cpf')->on('medicos')->onDelete('cascade');

            $table->dateTime('data_hora');
            $table->text('descricao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
