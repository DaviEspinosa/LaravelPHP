<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
        // Atributos que podem ser preenchidos em massa
        protected $fillable = ['cpf_paciente', 'cpf_medico', 'data_hora', 'descricao'];

        // Relações
        public function paciente()
        {
            return $this->belongsTo(Paciente::class);
        }
    
        public function medico()
        {
            return $this->belongsTo(Medico::class);
        }
}
