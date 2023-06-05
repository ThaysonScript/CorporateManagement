<?php

namespace App\Models\CadastroEstoques;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    use HasFactory;

    public function Usuario()
    {
        return $this->belongsTo(Registro::class, 'user_id', 'users');
    }

    public function CategoriaEstoque()
    {
        return $this->belongsTo(CategoriaEstoque::class, 'categoria_estoque_id', 'categoria_estoques');
    }

    public function Produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
