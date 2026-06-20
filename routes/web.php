<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TramiteFlujoController;

// 1. Pantalla de inicio (Login)
Route::get('/', function () {
    return view('login');
})->name('login');

// 2. Procesar el formulario del Login (Ruta POST)
Route::post('/login-check', function (Request $request) {
    $email = $request->input('email');

    // Validación de desarrollo para el ingreso directo
    if (str_ends_with($email, '@gmail.com')) {
        return redirect()->route('panel.general');
    }
    
    return back()->withErrors(['email' => 'Para pruebas de desarrollo introduce un correo válido de Gmail (@gmail.com).']);
})->name('login.post');

// 3. Panel de control principal (Dashboard)
Route::get('/dashboard', [DashboardController::class, 'general'])->name('panel.general');

// 4. Bloque asociado al flujo de Vialidad (GAMEA) - TOTALMENTE ENLAZADO AL CONTROLADOR
Route::prefix('vialidad-flujo')->group(function () {
    
    // Bandeja de Monitoreo
    Route::get('/bandeja', [TramiteFlujoController::class, 'bandeja'])->name('vialidad.bandeja');

    // Paso 1: Registro
    Route::get('/1-registro', [TramiteFlujoController::class, 'paso1'])->name('vialidad.paso1');
    Route::post('/1-registro/guardar', [TramiteFlujoController::class, 'guardarPaso1'])->name('vialidad.guardarPaso1');

    // Paso 2: Revisión Documental (Parámetro id opcional para el menú lateral)
    Route::get('/2-revision-documental/{id?}', [TramiteFlujoController::class, 'paso2'])->name('vialidad.paso2');
    Route::post('/2-revision-documental/procesar/{id}', [TramiteFlujoController::class, 'procesarPaso2'])->name('vialidad.procesarPaso2');
    
    // Paso 3: Inspección de Campo (CORREGIDO Y CONECTADO AL CONTROLADOR)
    Route::get('/3-inspeccion-campo/{id?}', [TramiteFlujoController::class, 'paso3'])->name('vialidad.paso3');
    Route::post('/3-inspeccion-campo/{id}', function (Request $request, $id) {
        $tramites = session()->get('simulador_tramites', []);
        if (isset($tramites[$id])) {
            $tramites[$id]['resultado_inspeccion'] = $request->input('resultado_inspeccion');
            $tramites[$id]['obs_inspeccion'] = $request->input('obs_inspeccion');
            $tramites[$id]['estado'] = '5_GABINETE'; 
            session()->put('simulador_tramites', $tramites);
        }
        return redirect()->route('vialidad.bandeja')->with('success', 'Inspección de campo registrada exitosamente.');
    })->name('vialidad.guardarPaso3');
  
    // Paso 4: Diseño de Gabinete (CORREGIDO Y CONECTADO AL CONTROLADOR)
    Route::get('/4-diseno-gabinete/{id?}', [TramiteFlujoController::class, 'paso4'])->name('vialidad.paso4');
    Route::post('/4-diseno-gabinete/{id}', function (Request $request, $id) {
        $tramites = session()->get('simulador_tramites', []);
        if (isset($tramites[$id])) {
            $tramites[$id]['sup_vias'] = $request->input('sup_vias');
            $tramites[$id]['sup_equipamiento'] = $request->input('sup_equipamiento');
            $tramites[$id]['estado'] = '5_INFORME_FINAL'; 
            session()->put('simulador_tramites', $tramites);
        }
        return redirect()->route('vialidad.bandeja')->with('success', 'Proyecto de Trazo Vial guardado correctamente.');
    })->name('vialidad.guardarPaso4');
});

// 5. Cierre de sesión
Route::post('/logout', function () {
    return redirect()->route('login');
})->name('logout');