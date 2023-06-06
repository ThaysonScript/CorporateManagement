<?php

namespace App\Models\CadastroEstoques;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    use HasFactory;

    public function CategoriaProduto(): BelongsTo
    {
        return $this->belongsTo(CategoriaProduto::class, 'categoria_produto_id', 'id');
    }

    public function Usuario()
    {
        return $this->belongsTo(Registro::class, 'user_id', 'id');
    }
}
