<?php

namespace App\Models\CadastroEstoques;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    use HasFactory;

    public function Produtos()
    {
        return $this->hasMany(Produto::class, 'produto_id');
    }
}
