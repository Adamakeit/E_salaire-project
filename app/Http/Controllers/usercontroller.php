<?php

namespace App\Http\Controllers;

use App\Http\Requests\userrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class usercontroller extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function handleregister(User $user, userrequest $request)
    {
        $user->name = $request->nom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success', "L'utilisateur a bien ete inserer");
    }
    public function login()
    {
        return view('auth.login');
    }
    public function handlelogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('../dashboard');
        } else {
            return redirect()->back()->with('error_msg', 'parametre non reconnu veuillez verifier votre email ou Mot de passe');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
    public function utilisateur(User $user)
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }
}
