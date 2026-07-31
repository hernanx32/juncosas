HTML


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imagen Giratoria en el Centro</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Estilos para centrar y animar */
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: #ffffff; /* Color de fondo */
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    /* Imagen que gira */
    .rotating-img {
      width: 100px; /* Ajusta el tamaño de tu imagen aquí */
      height: auto;
      animation: spin 2s linear infinite; /* 2 segundos por vuelta, movimiento continuo */
    }

    /* Regla que define la rotación continua (0 a 360 grados) */
    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    /* Clase para ocultar el preloader cuando termine de cargar */
    .preloader-hidden {
      opacity: 0;
      visibility: hidden;
    }
  </style>
</head>
<body>

  <!-- PRELOADER CON TU IMAGEN GIRATORIA -->
  <div class="preloader">
    <img src="img/cargando.gif" alt="Cargando...." height="100" width="100" class="rotating-img">......CARGANDO.....
	  <!--<img src="img/cargando.gif" alt="Cargando..." class="rotating-img">-->
  </div>

  <!-- CONTENIDO DE TU PÁGINA -->
  <main class="container py-5">
    <h1>¡Página Cargada!</h1>
    <p>Tu contenido irá aquí.</p>
  </main>

  <!-- JavaScript para ocultar el preloader al cargar la página -->
  <script>
    window.addEventListener('load', () => {
      const preloader = document.querySelector('.preloader');
      preloader.classList.add('preloader-hidden');
    });
  </script>
</body>
</html>