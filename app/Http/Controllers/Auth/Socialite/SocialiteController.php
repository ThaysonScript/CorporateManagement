<?php

namespace App\Http\Controllers\Auth\Socialite;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    public function RedirecionarProvedor() : RedirectResponse 
    {
        return Socialite::driver('google')->redirect();
    }


    public function RetornoProvedor(Request $request)
    {
        $user = Socialite::driver('google')->user();

        // Verificar se o usuário já existe no banco de dados
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Se o usuário existe, faça o login
            Auth::login($existingUser);
        } else {
            // Se o usuário não existe, crie um novo registro no banco de dados
            $newUser = new User;
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->password = Hash::make(Str::random(16));
            $newUser->save();

            // Faça o login com o novo usuário
            Auth::login($newUser);
        }

        // Redirecionar para a página desejada após a autenticação
        return redirect()->route('site.home');
    }
}
