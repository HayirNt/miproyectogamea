@extends('layouts.app')

@section('content')
<!-- ENCAPSULADOR GENERAL CON EL MISMO DISEÑO -->
<!-- ENCAPSULADOR FORZADO: Rompe el contenedor de Bootstrap para ocupar el 100% real del ancho de pantalla -->
<div style="position: absolute; left: 280px; right: 0; top: 0; bottom: 0; padding: 20px; box-sizing: border-box; display: flex; flex-direction: column; gap: 20px; font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background-color: #f3f4f6; height: auto; min-height: 100vh;">


    <!-- CABECERA DE LA PANTALLA -->
    <div style="width: 100%; display: block; margin-bottom: 5px;">
        <h1 style="font-weight: 700; color: #111827; font-size: 24px; letter-spacing: -0.5px; margin: 0 0 5px 0;">
            2 Revisión Documental y Asignación Directa
        </h1>
        <div style="font-size: 13px; color: #4b5563; font-weight: 600;">
            Inicio / Revisión Documental / <span style="color: #095593;">{{ $tramite->codigo_tramite }}</span>
        </div>
    </div>

    <!-- CUERPO DE REVISIÓN EN CAJA BLANCA -->
    <div style="width: 100%; background-color: #ffffff; border-radius: 8px; padding: 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); box-sizing: border-box;">
        
        <div style="display: flex; flex-direction: column; gap: 25px;">
            
            <!-- INFORMACIÓN DEL TRÁMITE -->
            <div>
                <h3 style="margin: 0 0 15px 0; font-size: 12px; font-weight: 700; color: #4b5563; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                    Información del Trámite
                </h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; width: 100%;">
                    <div>
                        <span style="display: block; font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase;">Nº de Trámite</span>
                        <span style="font-size: 13.5px; font-weight: 600; color: #111827;">{{ $tramite->codigo_tramite }}</span>
                    </div>
                    <div>
                        <span style="display: block; font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase;">Solicitante</span>
                        <span style="font-size: 13.5px; font-weight: 600; color: #111827;">{{ $tramite->nombre_solicitante }}</span>
                    </div>
                    <div>
                        <span style="display: block; font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase;">Fecha de Registro</span>
                        <span style="font-size: 13.5px; font-weight: 600; color: #111827;">12/05/2026</span>
                    </div>
                    <div>
                        <span style="display: block; font-size: 11px; font-weight: 700; color: #6b7280; text-transform: uppercase;">Ubicación Solicitada</span>
                        <span style="font-size: 13.5px; font-weight: 600; color: #111827;">{{ $tramite->urbanizacion }}</span>
                    </div>
                </div>
            </div>

            <!-- TABLA DE DOCUMENTOS PRESENTADOS -->
            <div>
                <h3 style="margin: 0 0 15px 0; font-size: 12px; font-weight: 700; color: #4b5563; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                    Documentos Presentados
                </h3>
                
                <div style="width: 100%; border: 1px solid #e5e7eb; border-radius: 6px; overflow: hidden;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                        <thead style="background-color: #f9fafb; color: #4b5563; font-weight: 700; font-size: 11px; text-transform: uppercase;">
                            <tr style="border-bottom: 1px solid #e5e7eb;">
                                <th style="padding: 10px 15px;">Documento</th>
                                <th style="padding: 10px 15px;">Archivo</th>
                                <th style="padding: 10px 15px; text-align: center;">Estado Validation</th>
                                <th style="padding: 10px 15px;">Observación Individual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 12px 15px; font-weight: 600;">Solicitud Inicial</td>
                                <td style="padding: 12px 15px;"><a href="#" style="color: #095593; text-decoration: none;">Solicitud_CI.pdf</a></td>
                                <td style="padding: 12px 15px; text-align: center;">
                                    <select class="select-estado-doc" style="padding: 4px 8px; font-size: 12px; font-weight: 600; border-radius: 4px; border: 1px solid #d1d5db; background-color: #f0fdf4; color: #166534;">
                                        <option value="correcto">✔️ Correcto</option>
                                        <option value="observado">❌ Observado</option>
                                    </select>
                                </td>
                                <td style="padding: 12px 15px;"><input type="text" class="input-obs-doc" style="width: 100%; padding: 4px 8px; border: 1px solid #e5e7eb; border-radius: 4px; font-size: 12.5px;" value="-" disabled></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 12px 15px; font-weight: 600;">Plano de Ubicación o Croquis</td>
                                <td style="padding: 12px 15px;"><a href="#" style="color: #095593; text-decoration: none;">Plano_Ubicacion.pdf</a></td>
                                <td style="padding: 12px 15px; text-align: center;">
                                    <select class="select-estado-doc" style="padding: 4px 8px; font-size: 12px; font-weight: 600; border-radius: 4px; border: 1px solid #d1d5db; background-color: #f0fdf4; color: #166534;">
                                        <option value="correcto">✔️ Correcto</option>
                                        <option value="observado">❌ Observado</option>
                                    </select>
                                </td>
                                <td style="padding: 12px 15px;"><input type="text" class="input-obs-doc" style="width: 100%; padding: 4px 8px; border: 1px solid #e5e7eb; border-radius: 4px; font-size: 12.5px;" value="-" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- FORMULARIO INTEGRADO POST HACIA EL BACKEND -->
            <form action="{{ route('vialidad.procesarPaso2', $tramite->id) }}" method="POST" style="display: flex; flex-direction: column; gap: 25px;">
                @csrf
                

                                <!-- PROPUESTA DE MEJORA: TABLA DE DISPONIBILIDAD CON 8 TÉCNICOS MUNICIPALES -->
                     <div id="seccion-carga-trabajo" style="width: 100%;">
                    <h3 style="margin: 0 0 5px 0; font-size: 12px; font-weight: 700; color: #095593; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                        Asignación Basada en Disponibilidad y Carga de Trabajo (Mejora UX)
                    </h3>
                    <p style="color: #6b7280; font-size: 12.5px; margin: 5px 0 15px 0;">El sistema analiza en tiempo real la cantidad de proyectos activos asignados al personal de la Unidad de Vialidad.</p>
                    
                    <div style="width: 100%; border: 1px solid #e5e7eb; border-radius: 6px; overflow: hidden; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                            <thead style="background-color: #f9fafb; color: #4b5563; font-weight: 700; font-size: 11px; text-transform: uppercase; letter-spacing: 0.3px;">
                                <tr style="border-bottom: 1px solid #e5e7eb;">
                                    <th style="padding: 10px 15px; text-align: center; width: 60px;">Asignar</th>
                                    <th style="padding: 10px 15px;">Funcionario Técnico</th>
                                    <th style="padding: 10px 15px;">Especialidad / Cargo</th>
                                    <th style="padding: 10px 15px;">Distritos Jurisdiccionales</th>
                                    <th style="padding: 10px 15px; text-align: center;">Casos Activos</th>
                                    <th style="padding: 10px 15px;">Estado Disponibilidad</th>
                                </tr>
                            </thead>
                            <tbody style="color: #374151; font-weight: 500;">
                                <!-- Técnico 1 -->
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 10px 15px; text-align: center;">
                                        <input type="radio" name="tecnico_id" value="1" style="transform: scale(1.2); cursor: pointer;" required>
                                    </td>
                                    <td style="padding: 10px 15px; font-weight: 600; color: #111827;">Ing. Marco Ticona Flores</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Procesador Vial I</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Distritos 3 y 4 (Río Seco / Villa Adela)</td>
                                    <td style="padding: 10px 15px; text-align: center; font-weight: 700; color: #b45309;">8 Trámites</td>
                                    <td style="padding: 10px 15px;"><span style="background-color: #fef3c7; color: #92400e; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">⚠️ Carga Moderada</span></td>
                                </tr>
                                <!-- Técnico 2 -->
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 10px 15px; text-align: center;">
                                        <input type="radio" name="tecnico_id" value="2" style="transform: scale(1.2); cursor: pointer;">
                                    </td>
                                    <td style="padding: 10px 15px; font-weight: 600; color: #111827;">Ing. Carlos Ramírez López</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Procesador Vial II</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Distritos 1 y 2 (Z. Central / Satélite)</td>
                                    <td style="padding: 10px 15px; text-align: center; font-weight: 700; color: #15803d;">2 Trámites</td>
                                    <td style="padding: 10px 15px;"><span style="background-color: #d1fae5; color: #065f46; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">🟢 Disponible</span></td>
                                </tr>
                                <!-- Técnico 3 -->
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 10px 15px; text-align: center;">
                                        <input type="radio" name="tecnico_id" value="3" style="transform: scale(1.2); cursor: pointer;">
                                    </td>
                                    <td style="padding: 10px 15px; font-weight: 600; color: #111827;">Arq. Ana Martínez Castro</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Especialista en Planificación</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Distritos 5 y 6 (Alto Lima / Ballivián)</td>
                                    <td style="padding: 10px 15px; text-align: center; font-weight: 700; color: #b91c1c;">14 Trámites</td>
                                    <td style="padding: 10px 15px;"><span style="background-color: #fee2e2; color: #991b1b; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">🚨 Saturado</span></td>
                                </tr>
                                <!-- Técnico 4 -->
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 10px 15px; text-align: center;">
                                        <input type="radio" name="tecnico_id" value="4" style="transform: scale(1.2); cursor: pointer;">
                                    </td>
                                    <td style="padding: 10px 15px; font-weight: 600; color: #111827;">Ing. Roberto Choque Limachi</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Topógrafo de Campo</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Distritos 7 y 14 (San Roque)</td>
                                    <td style="padding: 10px 15px; text-align: center; font-weight: 700; color: #15803d;">3 Trámites</td>
                                    <td style="padding: 10px 15px;"><span style="background-color: #d1fae5; color: #065f46; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">🟢 Disponible</span></td>
                                </tr>
                                <!-- Técnico 5 -->
                                                               <!-- Técnico 5 -->
                                                               <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 10px 15px; text-align: center;">
                                        <input type="radio" name="tecnico_id" value="5" style="transform: scale(1.2); cursor: pointer;">
                                    </td>
                                    <td style="padding: 10px 15px; font-weight: 600; color: #111827;">Arq. Elena Quispe Mendoza</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Analista de Cartografía</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Distritos 8 y 12 (Senkata)</td>
                                    <td style="padding: 10px 15px; text-align: center; font-weight: 700; color: #b45309;">9 Trámites</td>
                                    <td style="padding: 10px 15px;"><span style="background-color: #fef3c7; color: #92400e; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">⚠️ Carga Moderada</span></td>
                                </tr>
                                <!-- Técnico 6 -->
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 10px 15px; text-align: center;">
                                        <input type="radio" name="tecnico_id" value="6" style="transform: scale(1.2); cursor: pointer;">
                                    </td>
                                    <td style="padding: 10px 15px; font-weight: 600; color: #111827;">Ing. Walter Mamani Condori</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Gabinete Técnico</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Distritos 9 y 11 (Zonas Rurales)</td>
                                    <td style="padding: 10px 15px; text-align: center; font-weight: 700; color: #15803d;">1 Trámite</td>
                                    <td style="padding: 10px 15px;"><span style="background-color: #d1fae5; color: #065f46; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">🟢 Disponible</span></td>
                                </tr>
                                <!-- Técnico 7 -->
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 10px 15px; text-align: center;">
                                        <input type="radio" name="tecnico_id" value="7" style="transform: scale(1.2); cursor: pointer;">
                                    </td>
                                    <td style="padding: 10px 15px; font-weight: 600; color: #111827;">Arq. Gladys Apaza Nina</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Inspectora de Vías</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Distritos 10 y 13</td>
                                    <td style="padding: 10px 15px; text-align: center; font-weight: 700; color: #b91c1c;">11 Trámites</td>
                                    <td style="padding: 10px 15px;"><span style="background-color: #fee2e2; color: #991b1b; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">🚨 Saturado</span></td>
                                </tr>
                                <!-- Técnico 8 -->
                                <tr>
                                    <td style="padding: 10px 15px; text-align: center;">
                                        <input type="radio" name="tecnico_id" value="8" style="transform: scale(1.2); cursor: pointer;">
                                    </td>
                                    <td style="padding: 10px 15px; font-weight: 600; color: #111827;">Ing. Fernando Gutierrez Flores</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Gabinete y Geodesia</td>
                                    <td style="padding: 10px 15px; color: #4b5563;">Soporte General Multidistrital</td>
                                    <td style="padding: 10px 15px; text-align: center; font-weight: 700; color: #15803d;">0 Trámites</td>
                                    <td style="padding: 10px 15px;"><span style="background-color: #d1fae5; color: #065f46; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 4px;">🟢 Disponible</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- DICTAMEN GENERAL -->
                <div style="width: 100%;">
                    <h3 style="margin: 20px 0 10px 0; font-size: 12px; font-weight: 700; color: #4b5563; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                        Dictamen Final / Observaciones Generales
                    </h3>
                    <textarea name="observaciones" id="obs-general" rows="3" style="width: 100%; padding: 12px; font-size: 13px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; font-family: inherit; color: #111827; font-weight: 500;">Documentación revisada de forma conforme. Se procede con la aprobación de los requisitos documentales presentados y se delega el caso de forma inmediata al técnico seleccionado.</textarea>
                </div>

                <!-- ACCIONES INFERIORES -->
                <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 5px; padding-top: 15px; border-top: 1px solid #f3f4f6; box-sizing: border-box; width: 100%;">
                    <button type="submit" name="accion" value="rechazar" style="background-color: #dc3545; color: #ffffff; padding: 9px 20px; font-size: 13px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; border: none; cursor: pointer; height: 36px;">
                        🛑 Rechazar Trámite
                    </button>
                    <button type="submit" id="btn-observar-flujo" name="accion" value="observar" style="background-color: #ffc107; color: #212529; padding: 9px 20px; font-size: 13px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; border: none; cursor: pointer; height: 36px; opacity: 0.6;">
                        ⚠️ Observar
                    </button>
                    <button type="submit" id="btn-aprobar-flujo" name="accion" value="aprobar" style="background-color: #198754; color: #ffffff; padding: 9px 20px; font-size: 13px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; border: none; height: 36px; opacity: 0.5;" disabled>
                        ✔️ Aprobar y Asignar Técnico Directo
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- LÓGICA DE INTERACCIÓN INTEGRADA -->
<!-- SCRIPT DE INTERACCIÓN INTELIGENTE EN TIEMPO REAL COMPLETADO Y CERRADO -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectsDoc = document.querySelectorAll('.select-estado-doc');
        const radiosTecnico = document.querySelectorAll('input[name="tecnico_id"]');
        const btnAprobar = document.getElementById('btn-aprobar-flujo');
        const btnObservar = document.getElementById('btn-observar-flujo');
        const txtAreaGeneral = document.getElementById('obs-general');
        const seccionCarga = document.getElementById('seccion-carga-trabajo');

        function analizarEstadoPantalla() {
            let tieneObservacionDocumental = false;
            let tecnicoSeleccionado = false;

            // 1. Verificamos si algún selector está en modo "observado"
            selectsDoc.forEach(select => {
                if (select.value === 'observado') tieneObservacionDocumental = true;
            });

            // 2. Verificamos si se marcó algún radio button de técnico
            radiosTecnico.forEach(radio => {
                if (radio.checked) tecnicoSeleccionado = true;
            });

            // 3. Lógica de Control de Botones e Interfaces
            if (tieneObservacionDocumental) {
                // Si hay error en papeles, ocultamos/bloqueamos la asignación técnica porque no procede
                seccionCarga.style.opacity = "0.4";
                radiosTecnico.forEach(r => { r.disabled = true; r.checked = false; });
                
                btnObservar.style.opacity = "1";
                btnAprobar.disabled = true;
                btnAprobar.style.opacity = "0.5";
                btnAprobar.style.cursor = "not-allowed";
                txtAreaGeneral.value = "Se evidencian observaciones en la revisión de los requisitos presentados. El trámite es devuelto a ventanilla para su subsanación.";
            } else {
                // Papeles correctos: habilitamos la tabla de técnicos
                seccionCarga.style.opacity = "1";
                radiosTecnico.forEach(r => r.disabled = false);
                btnObservar.style.opacity = "0.6";

                if (tecnicoSeleccionado) {
                    // Solo si hay papeles correctos Y técnico seleccionado, se activa el botón verde de avance
                    btnAprobar.disabled = false;
                    btnAprobar.style.opacity = "1";
                    btnAprobar.style.cursor = "pointer";
                    txtAreaGeneral.value = "Documentación revisada de forma conforme. Se procede con la aprobación de los requisitos documentales y se delega el caso al técnico seleccionado.";
                } else {
                    btnAprobar.disabled = true;
                    btnAprobar.style.opacity = "0.5";
                    btnAprobar.style.cursor = "not-allowed";
                }
            }
        }

        // Eventos para los selectores de documentos
        selectsDoc.forEach((select) => {
            select.addEventListener('change', function() {
                if (this.value === 'observado') {
                    this.style.backgroundColor = '#fef2f2';
                    this.style.color = '#991b1b';
                } else {
                    this.style.backgroundColor = '#f0fdf4';
                    this.style.color = '#166534';
                }
                analizarEstadoPantalla();
            });
        });

        // Eventos para la selección de técnicos
        radiosTecnico.forEach(radio => {
            radio.addEventListener('change', analizarEstadoPantalla);
        });

        // Ejecución inicial al cargar
        analizarEstadoPantalla();
    });
</script>
@endsection
