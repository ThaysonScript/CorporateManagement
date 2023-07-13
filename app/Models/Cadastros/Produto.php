<?php

namespace App\Models\Cadastros;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'tituloProduto',
        'descricaoProduto',
        'categorias_id'
    ];

    public function Categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public static function CriarProduto(Request $request)
    {
        return Self::create($request->all());
    }
}
