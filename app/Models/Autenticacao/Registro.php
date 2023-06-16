<?php

namespace App\Models\Autenticacao;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\CadastroEstoques\CategoriaEstoque;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Registro extends Authenticatable
{
    use HasFactory, HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function CategoriaEstoque()
    {
        return $this->belongsTo(CategoriaEstoque::class);
    }


    public static function CriarUsuario($request, $criptografarSenha)
    {
        return Self::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $criptografarSenha
        ]);
    }
}
