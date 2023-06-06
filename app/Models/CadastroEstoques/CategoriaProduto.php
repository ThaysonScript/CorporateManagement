<?php

namespace App\Models\CadastroEstoques;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    use HasFactory;

    public function CategoriaEstoque()
    {
        return $this->belongsTo(CategoriaEstoque::class, 'categoria_estoque_id', 'categoria_estoques');
    }

    public function Produtos()
    {
        return $this->hasMany(Produto::class, 'produto_id', 'produtos');
    }
}
