<!DOCTYPE html>
<html lang="es" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Integral de Gestión Municipal - GAMEA</title>

    <!-- Enlaces de emergencia de Bootstrap oficiales desde internet -->
    <link href="https://jsdelivr.net" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f3f4f6 !important;
            font-family: 'Segoe UI', system-ui, sans-serif;
            overflow-y: auto !important;
            overflow-x: hidden;
        }

        /* Contenedor estructural maestro */
        .pantalla-contenedor {
            display: flex;
            width: 100%;
            min-height: 100vh;
            position: relative;
        }

        /* MENÚ LATERAL AZUL FIJO */
        .barra-lateral {
            width: 260px;
            min-width: 260px;
            max-width: 260px;
            background-color: #003366;
            color: #ffffff;
            height: 100vh;
            position: fixed; /* Clavada en pantalla */
            top: 0;
            left: 0;
            z-index: 9999;
            box-shadow: 4px 0 10px rgba(0,0,0,0.1);
            overflow-y: auto;
        }

        /* CONTENEDOR DE CONTENIDO TOTALMENTE LIBERADO */
        .contenido-principal {
         flex-grow: 1;
         margin-left: 260px; /* Coincide exactamente con el ancho de tu barra lateral */
         padding: 30px; 
         min-height: 100vh;
         box-sizing: border-box;
         width: calc(100% - 260px);
         background-color: #f8fafc;
        }

        /* Estilos del Menú */
        .menu-seccion-titulo {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: rgba(255, 255, 255, 0.4);
            font-weight: 700;
            padding: 15px 20px 5px 20px;
        }

        .opcion-menu {
            color: rgba(255, 255, 255, 0.75);
            font-size: 13.5px;
            font-weight: 500;
            padding: 11px 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            border-left: 4px solid transparent;
            transition: all 0.2s;
        }

        .opcion-menu:hover {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.05);
        }

        .opcion-menu.activo {
            color: #ffffff;
            background-color: #0b4582;
            border-left: 4px solid #ffb300;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="pantalla-contenedor">
        
        <!-- BARRA LATERAL AZUL -->
        <nav class="barra-lateral">
            <!-- Logo corporativo -->
            <div class="p-4" style="display: flex; align-items: center; gap: 12px; border-bottom: 1px solid rgba(255,255,255,0.1); background-color: #0c437a;">
    
    <!-- Espacio para la imagen / escudo -->
    <img src="{{ asset('img/logo2026.png') }}" style="height: 65px; width: auto; object-fit: contain; flex-shrink: 0;">
    
    <!-- Bloque de texto -->
    <div>
        <div style="font-size: 10px; color: #ffb300; font-weight: 700; line-height: 1.1;">GOBIERNO AUTÓNOMO MUNICIPAL</div>
        <div style="font-size: 20px; font-weight: 800; color: #ffffff; margin: 2px 0 0 0; letter-spacing: 0.5px;">EL ALTO</div>
       
    </div>

</div>
<br>
            <!-- Perfil del Administrador -->
          
              <a href="{{ route('logout') }}" 
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="p-3 m-3 rounded" 
               style="background-color: rgba(255,255,255,0.05); display: flex; align-items: center; text-decoration: none; cursor: pointer;">
              
              <div style="width: 32px; height: 32px; background-color: #ffb300; color: #111827; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 12px; flex-shrink: 0;">
              AD
          </div>
             <div style="margin-left: 10px;">
        <div style="font-size: 12px; font-weight: 700; color: #ffffff; line-height: 1;">Administrador</div>
        <span style="font-size: 10px; color: rgba(255,255,255,0.4);">admin@gmail.com</span>
             </div>
          </a>

<!-- Formulario oculto obligatorio para Laravel -->

<!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>-->


            
                        <!-- Navegación Estructurada del GAMEA con Desglose -->
            <div style="padding: 10px 0;">
                <div class="menu-seccion-titulo">Principal</div>
                <a href="{{ route('panel.general') }}" class="opcion-menu {{ Request::is('home') ? 'activo' : '' }}">Panel General</a>

                <div class="menu-seccion-titulo">Administración</div>
                <a href="#" class="opcion-menu">Administración de Usuarios</a>
                   
                              
                <div class="menu-seccion-titulo">Gestión Vial</div>
                <details style="width: 100%;" {{ Request::is('vialidad-flujo*') ? 'open' : '' }}>
                    <summary class="opcion-menu" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; list-style: none;">
                        <span>UNIDAD DE VIALIDAD</span>
                        <span style="font-size: 10px; opacity: 0.6;">▼</span>
                    </summary>
                    
                    <!-- Primer Nivel de Desglose -->
                    <div style="background-color: rgba(0, 0, 0, 0.15); padding-left: 5px;">
                        
                        <!-- SUBDESGLOSE INTERNO: TRAZO VIAL (Tiene los 11 pasos adentro) -->
                        <details style="width: 100%;" {{ Request::is('vialidad-flujo*') ? 'open' : '' }}>
                            <summary class="opcion-menu" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; list-style: none; font-size: 13px; padding: 9px 20px; color: #ffb300; font-weight: 600;">
                                <span>• Trazo Vial</span>
                                <span style="font-size: 8px; opacity: 0.8;">▼</span>
                            </summary>
                            
                            <!-- Los 11 Pasos del Flujo Municipal de Trazo Vial -->
                            <div style="background-color: rgba(0, 0, 0, 0.2); padding-left: 15px; border-left: 2px solid rgba(255, 255, 255, 0.1);">
                                <a href="{{ route('vialidad.bandeja') }}" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.6);">➔ Bandeja Monitoreo</a>
                                <a href="{{ route('vialidad.paso1') }}" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; {{ Request::is('vialidad-flujo/1-descripcion*') ? 'color: #ffb300; font-weight: bold;' : 'color: rgba(255,255,255,0.8);' }}"> Descripción General</a>
                                <a href="{{ route('vialidad.paso2') }}" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; {{ Request::is('vialidad-flujo/1-descripcion*') ? 'color: #ffb300; font-weight: bold;' : 'color: rgba(255,255,255,0.8);' }}">Revisión Documental </a>
                                <a href="{{ route('vialidad.paso3') }}" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; {{ Request::is('vialidad-flujo/1-descripcion*') ? 'color: #ffb300; font-weight: bold;' : 'color: rgba(255,255,255,0.8);' }}">Inspección de Campo</a>
                                <!--  <a href="#" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.8);">2. Revisión Documental</a> -->
                                <!--   <a href="#" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.8);">Inspección de Campo</a>-->
                                <a href="#" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.8);">Trabajo de Gabinete</a>
                                <a href="#" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.8);">Proyecto Trazo Vial</a>
                                <a href="#" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.8);">Áreas Verdes y Equip.</a>
                                <a href="#" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.8);"> Proyecto Definido</a>
                                <a href="#" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.8);">Nominación Calles</a>
                                <a href="#" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.8);">Actas Conformidad</a>
                                <a href="#" class="opcion-menu" style="font-size: 11.5px; padding: 6px 20px; color: rgba(255,255,255,0.8);"> Inf. Técnico y V°B°</a>
                            </div>
                        </details>

                        <!-- Otras Opciones de la Unidad de Vialidad -->
                        <a href="#" class="opcion-menu" style="font-size: 13px; padding: 9px 20px;">• Zonificación</a>
                        <a href="#" class="opcion-menu" style="font-size: 13px; padding: 9px 20px;">• Nominación de Calles</a>
                        <a href="#" class="opcion-menu" style="font-size: 13px; padding: 9px 20px;">• Amnistía</a>
                    </div>
                
              
        </nav>

        </nav>

        <!-- ÁREA DE CONTENIDO INTEGRAL -->
        <main class="contenido-principal">
            @yield('content')
        </main>

    </div>

</body>
</html>
