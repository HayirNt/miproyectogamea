<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // ACCESO LIBRE: No condicionamos el correo ni la contraseña.
        // Cualquier combinación saltará directamente al Dashboard del prototipo.
        return redirect()->route('dashboard');
    }
}
