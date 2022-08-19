<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function registro(Request $request)
    {
        $registro = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create($registro);

        $tokenaccess = $user->createToken('authToken')->accessToken;

        return response()->json([
            'res' => true,

            'token' => $tokenaccess
        ]);
    }
    public function acceso(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $token =  $user->createToken('MyApp', ['solo-ps'])->accessToken;
            return response()->json([
                'res' => true,
                'token' => $token
            ]);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}
