<?php

namespace App\Models\CadastroEstoques;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    use HasFactory;

    public function Usuario()
    {
        return $this->belongsTo(Registro::class, 'user_id', 'id');
    }

    public function CategoriaEstoque()
    {
        return $this->belongsTo(CategoriaEstoque::class, 'categoria_estoque_id', 'id');
    }

    public function Produtos()
    {
        return $this->hasMany(Produto::class, $foreignKey = null, $localKey = 'id');
    }
}
