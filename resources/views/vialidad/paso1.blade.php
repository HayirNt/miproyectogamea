@extends('layouts.app')

@section('content')
<!-- ENCAPSULADOR CORREGIDO: Elimina la altura infinita y ajusta el fondo gris al ras del formulario -->
<div style="padding: 10px 20px 20px 290px; width: 100%; box-sizing: border-box; display: flex; flex-direction: column; gap: 20px; font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background-color: #f3f4f6; height: auto;">

    <!-- CABECERA DE LA PANTALLA -->
    <div style="width: 100%; display: block; margin-bottom: 5px;">
        <h1 style="font-weight: 700; color: #1f2937; font-size: 24px; letter-spacing: -0.5px; margin: 0 0 5px 0;">
            1 Registro de Trámite (Ventanilla)
        </h1>
       
        <a href="{{ route('vialidad.bandeja') }}" style="color: #095593; text-decoration: none; font-size: 13px; font-weight: 700; display: inline-block; margin-bottom: 5px;">
            ⬅️ Volver a la Bandeja
        </a>
    </div>

    <!-- CUERPO DEL FORMULARIO EN CAJA BLANCA -->
    <div style="width: 100%; background-color: #ffffff; border-radius: 8px; padding: 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); box-sizing: border-box;">
        
        <!-- RUTA CONECTADA AL CONTROLADOR POR POST -->
        <form action="{{ route('vialidad.guardarPaso1') }}" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            @csrf

            <!-- SECCIÓN 1: DATOS DEL SOLICITANTE -->
            <div style="width: 100%;">
                <h3 style="margin: 0 0 15px 0; font-size: 13px; font-weight: 700; color: #095593; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                    Datos del Solicitante
                </h3>
                
                <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%; margin-bottom: 15px;">
                    <div style="flex: 2; min-width: 240px;">
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">Nombre / Razón Social</label>
                        <!-- SE AÑADIÓ EL ATRIBUTO NAME -->
                        <input type="text" name="solicitante" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; color: #111827; font-weight: 600;" value="Juan Pérez Gómez" required>
                    </div>
                    <div style="flex: 1; min-width: 140px;">
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">C.I. / NIT</label>
                        <input type="text" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; color: #111827; font-weight: 600;" value="1234567 LP" required>
                    </div>
                </div>

                <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%; margin-bottom: 15px;">
                    <div style="flex: 1; min-width: 140px;">
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">Teléfono / Celular</label>
                        <input type="text" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" value="78912345">
                    </div>
                    <div style="flex: 1; min-width: 200px;">
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">Correo Electrónico</label>
                        <input type="email" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" value="juan.perez@gmail.com">
                    </div>
                </div>

                <div style="width: 100%;">
                    <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">Dirección</label>
                    <input type="text" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" value="Av. Principal #123, Zona Central">
                </div>
            </div>

            <!-- SECCIÓN 2: DATOS DEL PREDIO / LOTE -->
            <div style="width: 100%; margin-top: 5px;">
                <h3 style="margin: 0 0 15px 0; font-size: 13px; font-weight: 700; color: #095593; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                    Datos del Predio / Lote
                </h3>
                
                <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%; margin-bottom: 15px;">
                    <div style="flex: 2; min-width: 200px;">
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">Urbanización / Zona</label>
                        <!-- SE AÑADIÓ EL ATRIBUTO NAME -->
                        <input type="text" name="urbanizacion" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; color: #111827; font-weight: 600;" value="Villa Victoria" required>
                    </div>
                    <div style="flex: 1; min-width: 100px;">
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">Manzana</label>
                        <input type="text" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" value="M-12">
                    </div>
                    <div style="flex: 1; min-width: 100px;">
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">Lote</label>
                        <input type="text" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" value="5">
                    </div>
                </div>

                <div style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%;">
                    <div style="flex: 1; min-width: 140px;">
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">Superficie (m²)</label>
                        <!-- SE AÑADIÓ EL ATRIBUTO NAME Y SE ELIMINÓ EL TEXTO 'm²' DEL VALUE PARA ENVIAR SOLO EL NÚMERO -->
                        <input type="number" step="0.01" name="superficie" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; color: #111827; font-weight: 700;" value="350.00">
                    </div>
                    <div style="flex: 2; min-width: 220px;">
                        <label style="display: block; font-size: 11.5px; font-weight: 700; color: #4b5563; margin-bottom: 6px;">Referencia / Observaciones</label>
                        <input type="text" style="width: 100%; padding: 9px; font-size: 13.5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" value="Frente a la plaza principal, a una cuadra del colegio.">
                    </div>
                </div>
            </div>

            <!-- SECCIÓN 3: DOCUMENTOS ADJUNTOS -->
                   
                     <div style="width: 100%; margin-top: 5px;">
                <h3 style="margin: 0 0 15px 0; font-size: 13px; font-weight: 700; color: #095593; text-transform: uppercase; border-bottom: 2px solid #f3f4f6; padding-bottom: 6px; letter-spacing: 0.5px;">
                    Documentos Adjuntos
                </h3>
                
                <div style="background-color: #f9fafb; border: 2px dashed #cbd5e1; border-radius: 6px; padding: 20px; text-align: center; color: #6b7280; font-size: 13px; cursor: pointer; margin-bottom: 15px; width: 100%; box-sizing: border-box;">
                    <span style="font-size: 18px; display: block; margin-bottom: 5px;">📁</span>
                    <strong>Arrastre archivos aquí o haga clic para seleccionar</strong>
                    <div style="font-size: 11px; color: #9ca3af; margin-top: 4px;">Formatos permitidos: PDF, JPG, PNG (Máx. 10MB)</div>
                </div>
                
                <!-- Lista de archivos cargados -->
                <div style="display: flex; flex-direction: column; gap: 8px; width: 100%; box-sizing: border-box; margin-bottom: 20px;">
                    <div style="background-color: #f8fafc; border-left: 4px solid #10b981; padding: 10px 15px; border-radius: 4px; display: flex; justify-content: space-between; align-items: center; font-size: 13px;">
                        <span style="font-weight: 600; color: #374151;">📄 Solicitud.pdf</span>
                        <span style="color: #10b981; font-weight: 700; font-size: 11px;">✔️ CARGADO</span>
                    </div>
                    <div style="background-color: #f8fafc; border-left: 4px solid #10b981; padding: 10px 15px; border-radius: 4px; display: flex; justify-content: space-between; align-items: center; font-size: 13px;">
                        <span style="font-weight: 600; color: #374151;">📄 Croquis del Terreno.pdf</span>
                        <span style="color: #10b981; font-weight: 700; font-size: 11px;">✔️ CARGADO</span>
                    </div>
                </div>
            </div> 

         
            <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 10px; padding-top: 15px; border-top: 1px solid #f3f4f6; box-sizing: border-box; width: 100%;">
                
                <a href="{{ route('vialidad.bandeja') }}" style="background-color: #e5e7eb; color: #374151; text-decoration: none; padding: 9px 20px; font-size: 13px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; height: 38px; box-sizing: border-box;">
                    Cancelar
                </a>

                <button type="submit" style="background-color: #0056b3; color: #ffffff; padding: 9px 20px; font-size: 13px; font-weight: 600; border-radius: 6px; display: inline-flex; align-items: center; border: none; cursor: pointer; height: 38px; box-sizing: border-box;">
                    Registrar Trámite
                </button>

            </div>

        </form>
    </div>
</div>
@endsection
