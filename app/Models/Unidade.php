<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;

    public function relMedico()
    {
        return $this->hasMany(Medico::class, 'unidade', 'id');
        // hasMany: Define que uma unidade pode ter muitos médicos (pai de médicos).
        // 'unidade_id': Nome da coluna na tabela medicos que é a chave estrangeira.
        // 'id': Nome da coluna na tabela unidades que é a chave primária.
    }

}