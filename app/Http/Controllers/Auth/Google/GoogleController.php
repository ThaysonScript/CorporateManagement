<?php

namespace App\Http\Controllers\Auth\Google;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    public function RedirecionarProvedor() 
    {
        dd("Em manutenção!");
        return Socialite::driver('google')->redirect();
    }


    public function RetornoProvedor()
    {
        $user = Socialite::driver('google')->user();

        $usuarioExistente = User::where('email', $user->email)->first();

        if ($usuarioExistente) {
            Auth::login($usuarioExistente);

        } else {
            $novoUsuario = User::create([
                'google_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make(Str::random(8))
            ]);

            Auth::login($novoUsuario);
        }
        return redirect()->route('site.home');
    }
}
