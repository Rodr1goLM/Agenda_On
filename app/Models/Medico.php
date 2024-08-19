<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'registro', 'cpf', 'especializacao', 'unidade'
    ];

    public function relUnidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade', 'id');
        // belongsTo: Define que um médico pertence a uma unidade (filho de uma unidade).
        // 'unidade_id': Nome da coluna na tabela medicos que é a chave estrangeira.
        // 'id': Nome da coluna na tabela unidades que é a chave primária.
    }
}
