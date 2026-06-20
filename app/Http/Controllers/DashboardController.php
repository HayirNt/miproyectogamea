<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Muestra la pantalla del Panel General del GAMEA
     */
    public function general()
    {
        // Retorna la vista profesional con las tarjetas y la tabla
        return view('dashboard');
    }
}
