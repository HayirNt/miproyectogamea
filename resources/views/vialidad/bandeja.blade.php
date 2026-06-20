@extends('layouts.app')

@section('content')

<div style="width: 100%; box-sizing: border-box; display: flex; flex-direction: column; gap: 25px;">
    <!-- CABECERA DE LA BANDEJA -->
    <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; flex-wrap: wrap; gap: 15px; border-bottom: 2px solid #e2e8f0; padding-bottom: 20px;">
        <div>
            <h1 style="font-weight: 700; color: #0f172a; font-size: 26px; letter-spacing: -0.5px; margin: 0;">
                Bandeja de Monitoreo General
            </h1>
            <p style="color: #64748b; font-size: 13.5px; font-weight: 500; margin: 6px 0 0 0;">
                Unidad de Vialidad | Flujo de Trazo Vial y Zonificación
            </p>
        </div>
        
        <!-- Botón para iniciar un trámite nuevo desde cero -->
        <div>
            <a href="{{ route('vialidad.paso1') }}" style="background-color: #095593; color: #ffffff; text-decoration: none; padding: 11px 20px; font-size: 13.5px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 2px 4px rgba(9, 85, 147, 0.2); transition: background-color 0.2s;">
                <span>➕</span> Nuevo Trámite (Paso 1)
            </a>
        </div>
    </div>

    <!-- TARJETAS DE ESTADO INTERNO DE LA BANDEJA (Grid formal auto-ajustable) -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; width: 100%;">
        
        <!-- Tarjeta 1 -->
        <div style="background-color: #ffffff; border-radius: 8px; padding: 18px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; border-left: 4px solid #ffb300; box-sizing: border-box;">
            <div style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">En Ventanilla</div>
            <div style="font-size: 26px; font-weight: 800; color: #0f172a; margin-top: 6px;">12 Trámites</div>
        </div>
        
        <!-- Tarjeta 2 -->
        <div style="background-color: #ffffff; border-radius: 8px; padding: 18px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; border-left: 4px solid #1a73e8; box-sizing: border-box;">
            <div style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">En Inspección</div>
            <div style="font-size: 26px; font-weight: 800; color: #0f172a; margin-top: 6px;">8 Activos</div>
        </div>
        
        <!-- Tarjeta 3 -->
        <div style="background-color: #ffffff; border-radius: 8px; padding: 18px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; border-left: 4px solid #10b981; box-sizing: border-box;">
            <div style="font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Listos para Firma</div>
            <div style="font-size: 26px; font-weight: 800; color: #0f172a; margin-top: 6px;">4 Informes</div>
        </div>
    </div>

    <!-- TABLA DE CONTROL DE FLUJO MUNICIPAL -->
    <div style="width: 100%; background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; box-sizing: border-box;">
        
        <div style="width: 100%; overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left;">
                <thead>
                    <tr style="font-size: 11.5px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; background-color: #f8fafc;">
                        <th style="padding: 14px 12px;">Código HR</th>
                        <th style="padding: 14px 12px;">Propietario / Solicitante</th>
                        <th style="padding: 14px 12px;">Zona / Distrito</th>
                        <th style="padding: 14px 12px;">Paso Actual del Flujo</th>
                        <th style="padding: 14px 12px;">Responsable Técnico</th>
                        <th style="padding: 14px 12px; text-align: center;">Acción</th>
                    </tr>
                </thead>
                <tbody style="font-size: 14px; color: #334155; font-weight: 500;">
                    
                    <!-- Fila Trámite 1 -->
                    <tr style="border-bottom: 1px solid #edf2f7;">
                        <td style="padding: 16px 12px; color: #095593; font-weight: 700;">HR-2026-0041</td>
                        <td style="padding: 16px 12px; color: #0f172a; font-weight: 600;">Alejandro Mamani Quispe</td>
                        <td style="padding: 16px 12px; color: #64748b;">Villa Adela / Dist. 3</td>
                        <td style="padding: 16px 12px;">
                            <span style="background-color: #fef3c7; color: #b45309; font-size: 12px; font-weight: 600; padding: 5px 12px; border-radius: 6px; display: inline-block;">
                                2. Revisión Documental
                            </span>
                        </td>
                        <td style="padding: 16px 12px; color: #64748b;">Jefe de Unidad</td>
                        <td style="padding: 16px 12px; text-align: center;">
                            <a href="{{ route('vialidad.paso2', 1) }}" style="background-color: #ffffff; color: #095593; text-decoration: none; padding: 6px 14px; font-size: 12.5px; font-weight: 600; border-radius: 6px; border: 1px solid #095593; display: inline-block; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                                Evaluar ➔
                            </a>
                        </td>
                    </tr>

                    <!-- Fila Trámite 2 -->
                    <tr style="border-bottom: 1px solid #edf2f7;">
                        <td style="padding: 16px 12px; color: #095593; font-weight: 700;">HR-2026-0038</td>
                        <td style="padding: 16px 12px; color: #0f172a; font-weight: 600;">Elena Flores Condori</td>
                        <td style="padding: 16px 12px; color: #64748b;">Río Seco / Dist. 4</td>
                        <td style="padding: 16px 12px;">
                            <span style="background-color: #e0f2fe; color: #0369a1; font-size: 12px; font-weight: 600; padding: 5px 12px; border-radius: 6px; display: inline-block;">
                                4. Inspección de Campo
                            </span>
                        </td>
                        <td style="padding: 16px 12px; color: #64748b;">Ing. Marco Ticona</td>
                        <td style="padding: 16px 12px; text-align: center;">
                        <a href="{{ route('vialidad.paso3', ['id' => 2]) }}" style="background-color: #ffffff; color: #095593; text-decoration: none; padding: 6px 14px; font-size: 12.5px; font-weight: 600; border-radius: 6px; border: 1px solid #095593; display: inline-block; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                       Gestionar ➔
                        </a>


                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- Estilo CSS embebido exclusivo para hacerlo Responsive en Móviles -->
<style>
    @media (max-width: 991px) {
        div[style*="margin-left: 280px"] {
            margin-left: 0 !important;
            width: 100% !important;
            padding: 15px !important;
        }
    }
</style>
@endsection
