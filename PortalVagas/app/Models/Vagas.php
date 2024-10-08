<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vagas extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
               'titulo', 'descricao', 'localizacao', 'salario','empresa',
    ];

    public function inscricoes(){
        return $this->hasMany(Inscricao::class);
    }

}
