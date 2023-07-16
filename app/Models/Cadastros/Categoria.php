<?php

namespace App\Models\Cadastros;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'tituloCategoria',
        'descricaoCategoria',
        'estoques_id',
        'user_id'
    ];

    public function Estoque()
    {
        return $this->belongsTo(Estoque::class);
    }

    public function Produto()
    {
        return $this->hasMany(Produto::class);
    }

    public static function CriarCategoria(Request $dados)
    {
        return Self::create([
            'estoques_id' => $dados->estoques_id,
            'user_id' => Auth::id(),
            'tituloCategoria' => $dados->tituloCategoria,
            'descricaoCategoria' => $dados->descricaoCategoria
        ]);
    }
}
