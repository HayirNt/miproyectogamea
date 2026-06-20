@extends('layouts.app')

@section('content')
<!-- ENCAPSULADOR FORZADO: Ancho completo de extremo a extremo, alineado a la barra azul -->
<div style="position: absolute; left: 280px; right: 0; top: 0; padding: 20px; box-sizing: border-box; display: flex; flex-direction: column; gap: 20px; font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background-color: #f3f4f6; min-height: 100vh;">

    <!-- CABECERA DE LA PANTALLA UNIFORMADA COMO PASO 3 -->
    <div style="width: 100%; display: block; margin-bottom: 5px;">
        <h1 style="font-weight: 700; color: #111827; font-size: 24px; letter-spacing: -0.5px; margin: 0 0 5px 0;">
            3. Inspección de Campo
        </h1>
        <div style="font-size: 13px; color: #4b5563; font-weight: 600;">
            Inicio / Gestión Vial / <span style="color: #095593;">{{ $tramite->codigo_tramite }}</span>
        </div>
    </div>

    <!-- CUERPO DE LA INSPECCIÓN EN CAJA BLANCA -->
    <div style="width: 100%; background-color: #ffffff; border-radius: 8px; padding: 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); box-sizing: border-box;">
        
        <div style="display: flex; flex-direction: column; gap: 25px; width: 100%;">
            
            <!-- INFORMACIÓN DE REFERENCIA DEL TRÁMITE -->
            <div style="width: 100%;">
                <h3 style="margin: 0 0 15px 0; font-size: 12px; font-weight: 700; color: #4b5563; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                    Datos del Predio a Inspeccionar
                </h3>
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; width: 100%; box-sizing: border-box;">
                    <div style="background-color: #f9fafb; padding: 10px; border-radius: 6px; border: 1px solid #e5e7eb;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase;">Nº Trámite</span>
                        <span style="font-size: 13px; font-weight: 600; color: #111827;">{{ $tramite->codigo_tramite }}</span>
                    </div>
                    <div style="background-color: #f9fafb; padding: 10px; border-radius: 6px; border: 1px solid #e5e7eb;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase;">Propietario</span>
                        <span style="font-size: 13px; font-weight: 600; color: #111827;">{{ $tramite->nombre_solicitante }}</span>
                    </div>
                    <div style="background-color: #f9fafb; padding: 10px; border-radius: 6px; border: 1px solid #e5e7eb;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase;">Zona de Inspección</span>
                        <span style="font-size: 13px; font-weight: 600; color: #111827;">{{ $tramite->urbanizacion }}</span>
                    </div>
                    <div style="background-color: #f9fafb; padding: 10px; border-radius: 6px; border: 1px solid #e5e7eb;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase;">Superficie</span>
                        <span style="font-size: 13px; font-weight: 600; color: #095593;">{{ $tramite->superficie }} m²</span>
                    </div>
                </div>
            </div>

            <!-- FORMULARIO DE RELEVAMIENTO DE CAMPO -->
          
            <form action="{{ route('vialidad.guardarPaso3', $tramite->id) }}" method="POST" style="display: flex; flex-direction: column; gap: 20px; width: 100%;">

                @csrf
                
                <!-- SECCIÓN: DATOS TÉCNICOS -->
                <div style="width: 100%;">
                    <h3 style="margin: 0 0 15px 0; font-size: 12px; font-weight: 700; color: #0056b3; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                        Informe y Verificación In Situ
                    </h3>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; width: 100%;">
                        <div>
                            <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px; text-transform: uppercase;">Estado de la Vía de Acceso</label>
                            <select name="estado_via" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; font-weight: 600; background-color: #ffffff;">
                                <option value="pavimentada">Vía Pavimentada / Asfalto</option>
                                <option value="adoquinada">Vía Adoquinada</option>
                                <option value="tierra" selected>Vía de Tierra / Ripio</option>
                            </select>
                        </div>
                        <div>
                            <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px; text-transform: uppercase;">Ancho de la Vía Verificado (Metros)</label>
                            <input type="text" name="ancho_via" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; font-weight: 600;" value="12.00 metros">
                        </div>
                    </div>
                </div>

                <!-- SECCIÓN: REGISTRO FOTOGRÁFICO -->
                <div style="width: 100%;">
                    <h3 style="margin: 0 0 15px 0; font-size: 12px; font-weight: 700; color: #0056b3; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                        Evidencia y Registro Fotográfico de Campo
                    </h3>
                    
                    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; width: 100%; box-sizing: border-box;">
                        <div style="border: 1px solid #cbd5e1; border-radius: 8px; background-color: #f8fafc; text-align: center; padding: 15px; box-sizing: border-box;">
                            <div style="font-size: 30px; margin-bottom: 5px;">📸</div>
                            <span style="display: block; font-size: 12px; font-weight: 700; color: #374151;">Fachada del Predio</span>
                            <span style="font-size: 11px; color: #16a34a; font-weight: 700; display: block; margin-top: 4px;">✔️ foto_perfil.jpg</span>
                        </div>
                        <div style="border: 1px solid #cbd5e1; border-radius: 8px; background-color: #f8fafc; text-align: center; padding: 15px; box-sizing: border-box;">
                            <div style="font-size: 30px; margin-bottom: 5px;">📸</div>
                            <span style="display: block; font-size: 12px; font-weight: 700; color: #374151;">Vía Izquierda</span>
                            <span style="font-size: 11px; color: #16a34a; font-weight: 700; display: block; margin-top: 4px;">✔️ foto_izq.jpg</span>
                        </div>
                        <div style="border: 1px solid #cbd5e1; border-radius: 8px; background-color: #f8fafc; text-align: center; padding: 15px; box-sizing: border-box;">
                            <div style="font-size: 30px; margin-bottom: 5px;">📸</div>
                            <span style="display: block; font-size: 12px; font-weight: 700; color: #374151;">Vía Derecha</span>
                            <span style="font-size: 11px; color: #16a34a; font-weight: 700; display: block; margin-top: 4px;">✔️ foto_der.jpg</span>
                        </div>
                        <div style="border: 2px dashed #94a3b8; border-radius: 8px; background-color: #f1f5f9; text-align: center; padding: 15px; box-sizing: border-box; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <div style="font-size: 24px; color: #64748b;">➕</div>
                            <span style="font-size: 11.5px; font-weight: 700; color: #64748b; margin-top: 5px;">Añadir Registro</span>
                        </div>
                    </div>
                </div>

                <!-- CONCLUSIÓN DE LA INSPECCIÓN -->
                               
                <div style="width: 100%; display: flex; flex-direction: column; gap: 15px;">
                    <h3 style="margin: 20px 0 0 0; font-size: 13px; font-weight: 700; color: #0056b3; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                        Resultados de la Inspección
                    </h3>
                    
                    <!-- Pregunta de Procedencia del Trámite -->
                    <div style="max-width: 400px;">
                        <label style="display: block; font-size: 12px; font-weight: 700; color: #4b5563; margin-bottom: 6px; text-transform: uppercase;">¿Procede el Trámite?</label>
                        <select name="resultado_inspeccion" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; font-weight: 600; background-color: #ffffff;">
                            <option value="si" selected>✔️ SÍ</option>
                            <option value="no">❌ NO</option>
                            <option value="observado">⚠️ OBSERVADO</option>
                        </select>
                    </div>

                    <!-- Cuadro de Observaciones del Resultado -->
                    <div style="width: 100%;">
                        <label style="display: block; font-size: 12px; font-weight: 700; color: #4b5563; margin-bottom: 6px; text-transform: uppercase;">¿Qué observación tiene?</label>
                        <textarea name="obs_inspeccion" rows="3" style="width: 100%; padding: 12px; font-size: 13px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; font-family: inherit; color: #111827; font-weight: 500;" placeholder="Describa a detalle las observaciones técnicas encontradas in situ...">Predio verificado físicamente. No presenta afectaciones viales superficiales ni sobreposiciones con la planimetría aprobada de la zona. Las estacas y linderos coinciden con las coordenadas presentadas en el croquis.</textarea>
                    </div>
                </div>

                <!-- BARRA DE ACCIONES INFERIOR -->
                <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 15px; padding-top: 15px; border-top: 1px solid #f3f4f6; box-sizing: border-box; width: 100%;">
                    <a href="{{ route('vialidad.bandeja') }}" style="background-color: #e5e7eb; color: #374151; text-decoration: none; padding: 9px 20px; font-size: 13px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; height: 36px; box-sizing: border-box;">
                        Volver a Bandeja
                    </a>
                    <button type="submit" style="background-color: #0056b3; color: #ffffff; padding: 9px 20px; font-size: 13px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; border: none; height: 36px; cursor: pointer;">
                        💾 Guardar Inspección (Paso 3)
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
