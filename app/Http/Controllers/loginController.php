<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

use ReallySimpleJWT\Token;

class loginController extends Controller
{
    //
    public function logger(Request $request)
    {
        $usuario  = Usuario::where("correo", $request->email)->first();
        if (!isset($usuario->correo)) {
            return view('login', ["error" => "Correo electronico no existe."]);
        }
        if (!(Hash::check($request->password, $usuario->contrasena))) {
            return view('login', ["error" => "Contraseña incorrecta."]);
        }

        $userId = 12;
        $secret = env('JWT_SECRET');
        $expiration = time() + 3600;
        $issuer = 'localhost';


        $token = Token::create($userId, $secret, $expiration, $issuer);

        $request->session()->put(["Authorization" => $token]);
        return redirect()->route("usuario.list");
    }

    public function logout(Request $request)
    {

        $request->session()->forget("Authorization");
        return redirect()->route("login.view");
    }
}
