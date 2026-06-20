@extends('layouts.app')

@section('content')
<!-- ENCAPSULADOR FORZADO: Ancho completo de extremo a extremo, alineado a tu barra lateral azul -->
<div style="position: absolute; left: 280px; right: 0; top: 0; padding: 20px; box-sizing: border-box; display: flex; flex-direction: column; gap: 20px; font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background-color: #f3f4f6; min-height: 100vh; width: calc(100% - 280px);">

    <!-- CABECERA DE LA PANTALLA TÉCNICA -->
    <div style="width: 100%; display: block; margin-bottom: 5px;">
        <h1 style="font-weight: 700; color: #111827; font-size: 24px; letter-spacing: -0.5px; margin: 0 0 5px 0;">
            4. Trabajo de Gabinete (Proyecto de Trazo Vial y Superficies)
        </h1>
        <div style="font-size: 13px; color: #4b5563; font-weight: 600;">
            Inicio / Procesamiento Técnico / Código: <span style="color: #095593;">{{ $tramite->codigo_tramite }}</span>
        </div>
    </div>

    <!-- CUERPO DEL FORMULARIO EN UN UNICO PANEL BLANCO EXTENDIDO -->
    <div style="width: 100%; background-color: #ffffff; border-radius: 8px; padding: 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); box-sizing: border-box;">
        
        <!-- Formulario POST apuntando a la ruta unificada del Paso 4 -->
        <form action="{{ route('vialidad.guardarPaso4', $tramite->id) }}" method="POST" style="display: flex; flex-direction: column; gap: 25px; width: 100%;">
            @csrf

            <!-- SECCIÓN 1: CUADRO DE DISTRIBUCIÓN DE SUPERFICIES (UNIFICA PANTALLAS 7 Y 8) -->
            <div style="width: 100%;">
                <h3 style="margin: 0 0 15px 0; font-size: 13px; font-weight: 700; color: #0056b3; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                    Distribución General de Superficies Terrenales
                </h3>
                
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; width: 100%; box-sizing: border-box;">
                    <div>
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px; text-transform: uppercase;">Superficie Útil de Lotes (m²)</label>
                        <input type="number" step="0.01" name="sup_lotes" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; font-weight: 600;" value="2450.80" required>
                    </div>
                    <div>
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px; text-transform: uppercase;">Superficie Destinada a Vías (m²)</label>
                        <input type="number" step="0.01" name="sup_vias" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; font-weight: 600;" value="1245.50" required>
                    </div>
                    <div>
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px; text-transform: uppercase;">Áreas Verdes y Equipamiento (m²)</label>
                        <input type="number" step="0.01" name="sup_equipamiento" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; font-weight: 600;" value="580.30" required>
                    </div>
                </div>
            </div>

            <!-- SECCIÓN 2: NOMINACIÓN Y VALIDACIÓN VECINAL (UNIFICA PANTALLAS 9 Y 10) -->
            <div style="width: 100%;">
                <h3 style="margin: 0 0 15px 0; font-size: 13px; font-weight: 700; color: #0056b3; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                    Nominación de Vías y Actas de Conformidad del Distrito
                </h3>
                
                <div style="width: 100%; border: 1px solid #e5e7eb; border-radius: 6px; overflow: hidden;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                        <thead style="background-color: #f9fafb; color: #4b5563; font-weight: 700; font-size: 11px; text-transform: uppercase;">
                            <tr style="border-bottom: 1px solid #e5e7eb;">
                                <th style="padding: 12px 15px;">Nombre Oficial de la Vía Propuesta</th>
                                <th style="padding: 12px 15px;">Ancho de Vía (Perfiles)</th>
                                <th style="padding: 12px 15px;">Nº de Acta Vecinal Notariada</th>
                                <th style="padding: 12px 15px; text-align: center;">Estado de Acta</th>
                            </tr>
                        </thead>
                        <tbody style="color: #374151; font-weight: 500;">
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 12px 15px; font-weight: 600; color: #111827;">Avenida Costanera Principal</td>
                                <td style="padding: 12px 15px;">16.00 Metros</td>
                                <td style="padding: 12px 15px; color: #095593; font-weight: 700;">ACTA-GAB-Nº-204/2026</td>
                                <td style="padding: 12px 15px; text-align: center;"><span style="background-color: #d1fae5; color: #065f46; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">✔️ VALIDADA</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 12px 15px; font-weight: 600; color: #111827;">Calle Vecinal Los Andes</td>
                                <td style="padding: 12px 15px;">12.00 Metros</td>
                                <td style="padding: 12px 15px; color: #095593; font-weight: 700;">ACTA-GAB-Nº-205/2026</td>
                                <td style="padding: 12px 15px; text-align: center;"><span style="background-color: #d1fae5; color: #065f46; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">✔️ VALIDADA</span></td>
                            </tr>
                            <tr>
                                <td style="padding: 12px 15px; font-weight: 600; color: #111827;">Pasaje Peatonal Illimani</td>
                                <td style="padding: 12px 15px;">5.50 Metros</td>
                                <td style="padding: 12px 15px; color: #6b7280;">Exento por Perfil Mínimo</td>
                                <td style="padding: 12px 15px; text-align: center;"><span style="background-color: #f3f4f6; color: #374151; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">NO REQUIERE</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- BARRA INFERIOR DE ACCIONES -->
            <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 10px; padding-top: 15px; border-top: 1px solid #f3f4f6; box-sizing: border-box; width: 100%;">
                <a href="{{ route('vialidad.bandeja') }}" style="background-color: #e5e7eb; color: #374151; text-decoration: none; padding: 9px 20px; font-size: 13px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; height: 36px; box-sizing: border-box;">
                    Cancelar
                </a>
                <button type="submit" style="background-color: #0056b3; color: #ffffff; padding: 9px 20px; font-size: 13px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; border: none; height: 36px; cursor: pointer;">
                    💾 Guardar Proyecto de Trazo
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
