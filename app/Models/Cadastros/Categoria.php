<?php

namespace App\Models\Cadastros;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'tituloCategoria',
        'descricaoCategoria',
        'estoques_id'
    ];

    public function Estoque()
    {
        return $this->belongsTo(Estoque::class);
    }

    public static function CriarCategoria(Request $dados)
    {
        return Self::create([
            'tituloCategoria' => $dados->tituloCategoria,
            'descricaoCategoria' => $dados->descricaoCategoria,
            'estoques_id' => $dados->estoques_id

        ]);
    }
}
