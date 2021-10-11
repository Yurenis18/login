<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use ReallySimpleJWT\Token;

class UsuarioController extends Controller
{
    //
    public function create(Request $request)
    {
        $usuario = new Usuario;

        $usuario->nombre = $request->name;
        $usuario->correo  =  $request->email;
        $usuario->contrasena  =     Hash::make($request->password);

        try {
            $usuario->save();
        } catch (Exception $e) {
            return view("register", ['error' => "Email ya existe en la base de datos."]);
        }


        return redirect()->route("usuario.list");
    }

    public function list(Request $request)
    {
        $token = $request->session()->get("Authorization");
        if ($token == null) {
            return redirect()->route("login.view");
        }

        $secret = env('JWT_SECRET');

        if (!(Token::validate($token, $secret))) {
            return redirect()->route("login.view");
        }

        $usuarios = Usuario::all();

        return view('usuariosList', compact('usuarios', 'usuarios'));
    }
}
