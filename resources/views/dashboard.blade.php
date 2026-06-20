@extends('layouts.app')

@section('content')
<!-- ENCAPSULADOR ANTI-BLOQUEO: Empuja todo el contenido obligatoriamente a la derecha de la barra azul -->
<div style="width: 100%; box-sizing: border-box; display: flex; flex-direction: column; gap: 25px;">
    <!-- Contenedor Superior: Título del Sistema y Perfil -->
    <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; flex-wrap: wrap; gap: 15px;">
        <div>
            <h1 style="font-family: 'Segoe UI', sans-serif; font-weight: 700; color: #1f2937; font-size: 24px; letter-spacing: -0.5px; margin: 0;">
                Sistema Integral de Gestión Municipal 
                <span style="background-color: #ffb300; color: #1f2937; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px; margin-left: 5px; vertical-align: middle;">GAMEA</span>
            </h1>
            <p style="color: #6b7280; font-size: 13px; font-weight: 500; margin: 4px 0 0 0;">
                Administración Catastral y Trámites
            </p>
        </div>
        
        <div style="display: flex; align-items: center; gap: 15px;">
            <div style="color: #6b7280; cursor: pointer; font-size: 18px;">
                <span>🔔</span>
            </div>
            <div style="width: 36px; height: 36px; background-color: #003366; color: #ffffff; font-weight: 700; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 13px;">
                AD
            </div>
        </div>
    </div>

    <!-- FILA DE TARJETAS INDICADORAS RESPONSIVAS -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; width: 100%;">
        
        <!-- Tarjeta 1: Ciudadanos Registrados -->
        <div style="flex: 1; min-width: 220px; background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); box-sizing: border-box;">
            <div style="display: flex; justify-content: space-between; align-items: start;">
                <div>
                    <div style="font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px;">Ciudadanos Registrados</div>
                    <div style="font-size: 26px; font-weight: 800; color: #111827; letter-spacing: -1px; margin-top: 8px;">24,892</div>
                </div>
                <div style="width: 40px; height: 40px; background-color: #fef3c7; color: #d97706; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <span style="font-size: 18px;">👥</span>
                </div>
            </div>
            <div style="margin-top: 15px; font-size: 12px; font-weight: 600; color: #10b981;">
                ▲ 8.2% <span style="color: #9ca3af; font-weight: 400; margin-left: 2px;">vs mes anterior</span>
            </div>
        </div>

        <!-- Tarjeta 2: Predios Catastrados -->
        <div style="flex: 1; min-width: 220px; background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-left: 4px solid #1a73e8; box-sizing: border-box;">
            <div style="display: flex; justify-content: space-between; align-items: start;">
                <div>
                    <div style="font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px;">Predios Catastrados</div>
                    <div style="font-size: 26px; font-weight: 800; color: #111827; letter-spacing: -1px; margin-top: 8px;">152,340</div>
                </div>
                <div style="width: 40px; height: 40px; background-color: #e0f2fe; color: #0369a1; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <span style="font-size: 18px;">📍</span>
                </div>
            </div>
            <div style="margin-top: 15px; font-size: 12px; font-weight: 600; color: #10b981;">
                ▲ 3.5% <span style="color: #9ca3af; font-weight: 400; margin-left: 2px;">nuevos este año</span>
            </div>
        </div>

        <!-- Tarjeta 3: Trámites en Proceso -->
        <div style="flex: 1; min-width: 220px; background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-left: 4px solid #6b7280; box-sizing: border-box;">
            <div style="display: flex; justify-content: space-between; align-items: start;">
                <div>
                    <div style="font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px;">Trámites en Proceso</div>
                    <div style="font-size: 26px; font-weight: 800; color: #111827; letter-spacing: -1px; margin-top: 8px;">1,847</div>
                </div>
                <div style="width: 40px; height: 40px; background-color: #f3f4f6; color: #374151; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <span style="font-size: 18px;">⏱️</span>
                </div>
            </div>
            <div style="margin-top: 15px; font-size: 12px; font-weight: 600; color: #b45309;">
                ⏳ +234 <span style="color: #9ca3af; font-weight: 400; margin-left: 2px;">pendientes</span>
            </div>
        </div>

        <!-- Tarjeta 4: Trámites Nuevos (Hoy) -->
        <div style="flex: 1; min-width: 220px; background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-left: 4px solid #dc2626; box-sizing: border-box;">
            <div style="display: flex; justify-content: space-between; align-items: start;">
                <div>
                    <div style="font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px;">Trámites Nuevos (Hoy)</div>
                    <div style="font-size: 26px; font-weight: 800; color: #111827; letter-spacing: -1px; margin-top: 8px;">342</div>
                </div>
                <div style="width: 40px; height: 40px; background-color: #fee2e2; color: #b91c1c; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <span style="font-size: 18px;">📄</span>
                </div>
            </div>
            <div style="margin-top: 15px; font-size: 12px; font-weight: 600; color: #10b981;">
                ▲ 12% <span style="color: #9ca3af; font-weight: 400; margin-left: 2px;">vs día anterior</span>
            </div>
        </div>

    </div>

    <!-- BLOQUE CONTENEDOR DE LA TABLA -->
    <div style="width: 100%; background-color: #ffffff; border-radius: 8px; padding: 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); box-sizing: border-box;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px;">
            <div style="display: flex; align-items: center; gap: 8px;">
                <span style="color: #dc2626; font-size: 16px;">⚡</span>
                <h2 style="margin: 0; font-size: 16px; font-weight: 700; color: #1f2937;">Trámites Recientes</h2>
            </div>
            <div style="display: flex; gap: 10px;">
                <span style="background-color: #fef3c7; color: #b45309; font-size: 11px; font-weight: 600; padding: 6px 12px; border-radius: 4px;">En Proceso: 1,847</span>
                <span style="background-color: #e0f2fe; color: #0369a1; font-size: 11px; font-weight: 600; padding: 6px 12px; border-radius: 4px;">Nuevos Hoy: 342</span>
            </div>
        </div>

        <div style="width: 100%; overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-family: sans-serif;">
                <thead>
                    <tr style="font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #f3f4f6;">
                        <th style="padding: 12px 10px;">N° Trámite</th>
                        <th style="padding: 12px 10px;">Solicitante</th>
                        <th style="padding: 12px 10px;">Tipo</th>
                        <th style="padding: 12px 10px;">Estado</th>
                        <th style="padding: 12px 10px;">Fecha</th>
                        <th style="padding: 12px 10px;">Progreso</th>
                    </tr>
                </thead>
                  <tbody style="font-size: 13.5px; color: #374151; font-weight: 500;">
                    <!-- Fila 1: TR-2026-1245 -->
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 15px 10px; color: #6b7280; font-weight: 700; font-size: 12.5px;">TR-2026-1245</td>
                        <td style="padding: 15px 10px; color: #111827; font-weight: 600;">María Laura Gutiérrez</td>
                        <td style="padding: 15px 10px; color: #6b7280;">Licencia Construcción</td>
                        <td style="padding: 15px 10px;">
                            <span style="background-color: #eff6ff; color: #1d4ed8; font-size: 11px; font-weight: 600; padding: 4px 10px; border-radius: 12px;">En Proceso</span>
                        </td>
                        <td style="padding: 15px 10px; color: #6b7280; font-size: 12.5px;">28/05/2026</td>
                        <td style="padding: 15px 10px;">
                            <div style="height: 6px; background-color: #e5e7eb; border-radius: 10px; width: 120px; overflow: hidden;">
                                <div style="width: 65%; background-color: #1a73e8; height: 100%; border-radius: 10px;"></div>
                            </div>
                        </td>
                    </tr>
                    <!-- Fila 2: TR-2026-1246 (Seguimiento corregido en orden) -->
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 15px 10px; color: #6b7280; font-weight: 700; font-size: 12.5px;">TR-2026-1246</td>
                        <td style="padding: 15px 10px; color: #111827; font-weight: 600;">Juan Carlos Mamani</td>
                        <td style="padding: 15px 10px; color: #6b7280;">Certificado Catastral</td>
                        <td style="padding: 15px 10px;">
                            <span style="background-color: #fef3c7; color: #d97706; font-size: 11px; font-weight: 600; padding: 4px 10px; border-radius: 12px;">En Revisión</span>
                        </td>
                        <td style="padding: 15px 10px; color: #6b7280; font-size: 12.5px;">18/06/2026</td>
                        <td style="padding: 15px 10px;">
                            <div style="height: 6px; background-color: #e5e7eb; border-radius: 10px; width: 120px; overflow: hidden;">
                                <div style="width: 35%; background-color: #ffb300; height: 100%; border-radius: 10px;"></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection