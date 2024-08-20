<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
            // Atributos que podem ser preenchidos em massa
            protected $fillable = ['nome', 'telefone', 'cpf', 'observacao'];

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
