<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Inscricao extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'usuario_id', 'vaga_id', 'status',
    ];

    protected function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function vaga(){
        return $this->belongsTo(Vagas::class);
    }

}
