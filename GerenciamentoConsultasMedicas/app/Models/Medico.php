<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Medico extends Authenticatable
{
        // Atributos que podem ser preenchidos em massa
        protected $fillable = [ 'cpf','password', 'email' ,'nome', 'telefone', 'especializacao'];

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
