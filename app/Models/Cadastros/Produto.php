<?php

namespace App\Models\Cadastros;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'tituloProduto',
        'descricaoProduto',
        'categorias_id',
        'user_id'
    ];

    public function Usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function Categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public static function CriarProduto(Request $request)
    {
        return Self::create([
            'tituloProduto' => $request->tituloProduto,
            'descricaoProduto' => $request->descricaProduto,
            'categorias_id' => $request->categorias_id,
            'user_id' => Auth::id()
        ]);
    }
}
