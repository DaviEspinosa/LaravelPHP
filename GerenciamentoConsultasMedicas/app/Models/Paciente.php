<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Authenticatable
{
            // Atributos que podem ser preenchidos em massa
            protected $fillable = [
                'nome',
                'email',
                'password', 
                'telefone', 
                'cpf', 
                'observacao'
            ];

            // Cast de atributos (exemplo)
            protected $casts = [
                'created_at' => 'datetime',
                'updated_at' => 'datetime',
            ];
        
            // Relação com o model Consulta
            public function consultas()
            {
                return $this->hasMany(Consulta::class);
            }
}
