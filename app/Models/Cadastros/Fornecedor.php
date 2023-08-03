<?php

namespace App\Models\Cadastros;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedores';
    protected $fillable = [
        'fornecedorNome',
        'email',
        'fornecedorEmpresa',
        'servicoPrestado',
        'telefone',
        'endereco',
        'tipo',
        'pais',
        'estado',
        'cidade',
        'user_id',
        'estoque_id',
        'categoria_id',
        'produto_id'

    ];

    public function Usuario(){
        $this->belongsTo(User::class);
    }
}
