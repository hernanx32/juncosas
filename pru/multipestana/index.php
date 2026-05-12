<!DOCTYPE html>
<html lang="es"><head>
    <meta charset="UTF-8">
    <title>Formulario con Pestañas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <form id="multiTabForm" action="procesar.php" method="POST">
        
        <!-- Botones de las Pestañas -->
        <div class="tabs">
            <button type="button" class="tab-link active" onclick="openTab(event, 'Basicos')">Datos Básicos</button>
            <button type="button" class="tab-link" onclick="openTab(event, 'Configuracion')">Configuración Avanzada</button>
            <button type="button" class="tab-link" onclick="openTab(event, 'Otros')">otro</button>
		</div>

        <!-- Contenido: Pestaña 1 -->
        <div id="Basicos" class="tab-content" style="display: block;">
            <h3>Datos General</h3>
            <label>Nombre:</label>
            <input type="text" name="nombre" class="required-field">
            
            <label>Domicilio (Opcional):</label>
            <input type="text" name="domicilio">
            
            <label>CUIT:</label>
            <input type="text" name="cuit" class="required-field">
        </div>

        <!-- Contenido: Pestaña 2 -->
        <div id="Configuracion" class="tab-content" style="display: none;">
            <h3>Ajustes de Servidor</h3>
            <label>IP Servidor:</label>
            <input type="text" name="ip_servidor" class="required-field">
            
            <label>Nombre DB:</label>
            <input type="text" name="db_nombre" class="required-field">
        </div>
		
		
		<!-- Contenido: Pestaña 3 -->
        <div id="Otros" class="tab-content" style="display: none;">
            <h3>Otros Ajustes</h3>
            <label>Servidor:</label>
            <input type="text" name="ip_servidor" class="required-field">
            
            <label>Nombre:</label>
            <input type="text" name="db_nombre" class="required-field">
        </div>

        <div class="footer">
            <button type="submit">Enviar Todos los Datos</button>
        </div>
    </form>
</div>

<script src="script.js"></script>
</body>
</html>