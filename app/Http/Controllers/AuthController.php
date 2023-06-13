<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function generateAccessCode($userId)
    {
        $accessCode = generateAccessCode(); // Lógica para generar el código de acceso

        DB::table('access_conversor')->insert([
            'user_id' => $userId,
            'access_code' => $accessCode,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Otras acciones después de generar el código de acceso
    }

    public function verifyAccessCode(Request $request)
    {
        $userId = request('username'); 
        $accessCode = request('password');
        $result = DB::table('access_conversor')
            ->where('user_id', $userId)
            ->where('access_code', $accessCode)
            ->exists();

        if ($result) {
            return redirect('/formulario');
        } else {
            return redirect('/');        }
    }
}
