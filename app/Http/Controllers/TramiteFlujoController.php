<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TramiteFlujoController extends Controller
{
    // Muestra la lista de todos los trámites creados en la sesión
    public function bandeja()
    {
        // Obtenemos la lista de trámites simulados (si no existe, empezamos con un arreglo vacío)
        $tramites = session()->get('simulador_tramites', []);
        
        return view('vialidad.bandeja', compact('tramites'));
    }

    // Muestra el formulario de registro (Paso 1)
    public function paso1()
    {
        return view('vialidad.paso1');
    }

    // Guarda los datos del Paso 1 en la sesión simulando una inserción en BD
    public function guardarPaso1(Request $request)
    {
        $tramites = session()->get('simulador_tramites', []);

        // Creamos un ID único simulado basado en el conteo actual
        $nuevoId = count($tramites) + 1;
        $codigo = 'VIAL-' . date('Y') . '-' . rand(10000, 99999);

        // Estructuramos el nuevo registro
        $nuevoTramite = [
            'id' => $nuevoId,
            'codigo_tramite' => $codigo,
            'nombre_solicitante' => $request->input('solicitante'),
            'urbanizacion' => $request->input('urbanizacion'),
            'superficie' => $request->input('superficie'),
            'estado' => '2_REVISION', // Avanza al estado del Paso 2
            'decision_jefe' => null,
            'observaciones_jefe' => null
        ];

        // Lo añadimos al "almacén" de la sesión
        $tramites[$nuevoId] = $nuevoTramite;
        session()->put('simulador_tramites', $tramites);

        return redirect()->route('vialidad.bandeja')->with('success', 'Trámite registrado con código: ' . $codigo);
    }

    // Muestra la pantalla de Revisión (Paso 2) jalando los datos de la sesión u ofreciendo uno de prueba para el menú lateral
    public function paso2($id = null)
    {
        $tramites = session()->get('simulador_tramites', []);

        // SOLUCIONADO: Si vienes desde el menú lateral sin ID o el ID no existe en la sesión, te genera datos de prueba estáticos para evitar que falle
        $tramite = !isset($tramites[$id]) ? (object) [
            'id' => $id ?? 1,
            'codigo_tramite' => 'HR-2026-0041',
            'nombre_solicitante' => 'Alejandro Mamani Quispe',
            'urbanizacion' => 'Villa Adela / Dist. 3',
            'superficie' => '250.00'
        ] : (object) $tramites[$id];

        return view('vialidad.paso2', compact('tramite'));
    }

    // Procesa la decisión del Paso 2 (Rechazar, Observar, Aprobar)
    public function procesarPaso2(Request $request, $id)
    {
        $tramites = session()->get('simulador_tramites', []);

        if (isset($tramites[$id])) {
            $accion = $request->input('accion');
            
            $tramites[$id]['decision_jefe'] = $accion;
            $tramites[$id]['observaciones_jefe'] = $request->input('observaciones');

            if ($accion == 'aprobar') {
                $tramites[$id]['estado'] = '3_ASIGNACION';
            } elseif ($accion == 'observar') {
                $tramites[$id]['estado'] = '1_REGISTRO'; // Regresa al paso 1
            } else {
                $tramites[$id]['estado'] = 'RECHAZADO';
            }

            session()->put('simulador_tramites', $tramites);
        }

        return redirect()->route('vialidad.bandeja')->with('success', 'Evaluación procesada en la sesión.');
    }

    // Muestra el formulario del Paso 3 (Inspección de Campo)
    public function paso3($id = null)
    {
        $tramites = session()->get('simulador_tramites', []);
        
        // SOLUCIONADO: Se hace el parámetro $id opcional para admitir accesos desde la lista lateral sin ID activo
        $tramite = !isset($tramites[$id]) ? (object) [
            'id' => $id ?? 2,
            'codigo_tramite' => 'HR-2026-0038',
            'nombre_solicitante' => 'Elena Flores Condori',
            'urbanizacion' => 'Río Seco / Dist. 4',
            'superficie' => '350.00'
        ] : (object) $tramites[$id];
        
        return view('vialidad.paso3', compact('tramite'));
    }

    // Muestra el formulario del Paso 4 (Trabajo de Gabinete)
    public function paso4($id = null)
    {
        $tramites = session()->get('simulador_tramites', []);
        
        // SOLUCIONADO: Admite llamadas estáticas sin ID asignándole el valor por defecto de desarrollo de forma directa
        $tramite = !isset($tramites[$id]) ? (object) [
            'id' => $id ?? 2,
            'codigo_tramite' => 'HR-2026-0038',
            'nombre_solicitante' => 'Elena Flores Condori',
            'urbanizacion' => 'Río Seco / Dist. 4',
            'superficie' => '350.00'
        ] : (object) $tramites[$id];
        
        return view('vialidad.paso4', compact('tramite'));
    }
}
