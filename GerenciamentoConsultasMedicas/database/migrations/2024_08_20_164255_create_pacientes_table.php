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
        // Para criar uma tabela em meu banco de dados
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('cpf', 14)->primary();
            $table->string('nome');
            $table->string('email');
            $table->string('password');
            $table->string('telefone');
            $table->text('observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
