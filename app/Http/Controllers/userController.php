<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class userController extends Controller
{
    public function registerPost(Request $request)
    {
        $request->validate(
            [
                'nom' => ['required'],
                'prenom' => ['required'],
                'adresse' => ['required'],
                'mail' => ['required', 'email', 'unique:users,email'],
                'password' => ['required']
            ]
        );

        User::create([
            'nom' => $request->nom,
                'prenom' => $request->prenom,
                'adresse' => $request->adresse,
                'estAdmin' => 0,
                'email' => $request->mail,
                'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('index')->with('statut', 'Connection réussie');
        }else{

            return redirect()->back()->with('statut', 'Identifiant ou mot de passe incorrect');
        };
    }

    public function deconnexion(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
