<?php

namespace App\Models\Cadastros;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Estoque extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo',
        'descricao'
    ];

    public function Usuario()
    {
        $this->belongsTo(User::class);
    }

    public function Categoria()
    {
        return $this->hasMany(Categoria::class);
    }

    public function Fornecedor()
    {
        $this->hasMany(Fornecedor::class);
    }





    public static function CadastrarEstoque(Request $dados)
    {
        return Self::create([
            'user_id' => Auth::id(),
            'titulo' => $dados->titulo,
            'descricao' => $dados->descricao,
        ]);
    }

    public static function MostrarEstoques()
    {
        return Self::all()->where('user_id', Auth::id());
    }
}
