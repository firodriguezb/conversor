<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
{
    $credentials = [
        'username' => 'admin',
        'password' => '12345',
    ];       

    if (Auth::attempt($credentials)) {
        // El usuario ha iniciado sesión correctamente
        return redirect()->intended('/formulario');
    } else {
        // Las credenciales de inicio de sesión son inválidas
        return back()->withErrors([
            'username' => 'Las credenciales ingresadas son incorrectas.',
        ]);
    }
}

}