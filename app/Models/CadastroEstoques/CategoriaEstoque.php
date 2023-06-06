<?php

namespace App\Models\CadastroEstoques;

use App\Models\Autenticacao\Registro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaEstoque extends Model
{
    use HasFactory;

    public function Usuario()
    {
        return $this->belongsTo(Registro::class, 'user_id', 'id');
    }

    public function CategoriaProduto()
    {
        return $this->hasMany(CategoriaProduto::class, 'categoria_estoque_id', 'id');
    }
}
