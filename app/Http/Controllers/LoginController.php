<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Associado;
use App\Http\Requests\LoginPost;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function username()
    {
        return 'cpf';
    }

    public function index()
    {
        return view('auth.pages.login');
    }

    public function login(LoginPost $request)
    {
        $validated = $request->validated();

        $credentials = $request->only('cpf', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/home');
        }else{
            $validated = "Usuário ou senha inválido";
        }

       return redirect('/')->withInput()->withErrors($validated);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
