<?PHP 
if (!isset($_COOKIE['device_id'])) {
    $deviceId = bin2hex(random_bytes(16));

    setcookie(
        'device_id',
        $deviceId,
        time() + (365 * 24 * 60 * 60), // 1 año
        "/"
    );
} else {
    $deviceId = $_COOKIE['device_id'];
}

?>



<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
       <a class="h1"><b>Sistema de</b> Gestión</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">
<H2>Datos de Equipo</h2></p>
      <form action="index.php" method="post" id="form1" name="form1">
        ID Dispositivo: 
		  <div class="input-group mb-2">
		    <input type="text" class="form-control" placeholder="Email" value="<?PHP echo $deviceId;	?>">
          <div class="input-group-append">
		</div>
			  </div>
			  
        IP Servidor: <br>
		  <div class="input-group mb-3">
		    <input type="text" class="form-control" placeholder="Email" value="<?PHP echo $_SERVER['REMOTE_ADDR'] ;	?>">
          <div class="input-group-append">
			  
			  
<!--  Icono de Correo

	<div class="input-group-text">
	<span class="fas fa-envelope"></span>
  	</div>
-->
			
			
			</div>
        </div>
        
	    <div class="row">
          <div class="col-12">
            <button type="submit" id="volver" class="btn btn-primary btn-block">Volver</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>