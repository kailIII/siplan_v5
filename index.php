<?php
$host_bd = "localhost";
$usuario_bd = "usr_consultas";
$clave_bd =  "Wer355ydLdoodp?kudfte$%mdhjfhhs:idyyecyttTnfj";
$bd = "siplan_pmz_2015";
$conexion=new mysqli($host_bd,$usuario_bd,$clave_bd,$bd) or die("Error");
if($conexion->connect_errno){
$error = $conexion->connect_errno;
$msg = "<div class='callout callout-danger'>
<h4><span class='glyphicon glyphicon-ban-circle' aria-hidden='true'></span> Error en la conexión a la Base de Datos</h4>
<p> Existe un problema con la conexión a la base de datos del sistema, porfavor comunicarse con su administrador de sistemas para solucionarlo.</p>
<p> Codigo de error:&nbsp;<b> ".$error."</b></p>
</div>";
}else{
$consultar_estatus = "SELECT valor FROM configuracion WHERE variable = 'system_status'";
$ex_consulta = $conexion->query($consultar_estatus);
$r = $ex_consulta->fetch_array();
$msg = "<section class='content'>
<div class='row'>
<!-- left column -->
<div class='col-md-10'>
<!-- general form elements -->
<div class='box box-success'>
<div class='box-header'>
<h3 class='box-title'>Ingresar al Sistema</h3>
</div><!-- /.box-header -->
<!-- form start -->
<form role='form' action='clases/login.php' method='post' name='loginform'>
<div class='box-body'>
<div class='form-group'>
<label for='exampleInputEmail1'>Usuario</label>
<input type='text' class='form-control' id='usuario' name ='usuario' placeholder='Usuario' required>
</div>
<div class='form-group'>
<label for='exampleInputPassword1'>Password</label>
<input type='password' class='form-control' name ='clave' id='exampleInputPassword1' placeholder='Password' required>
</div>

<div class='form-group'>
<label for='ejercicio'>Ejercicio</label>
<select class='form-control'>
<option value='2015'> 2015 </option>
</select>
</div>

</div><!-- /.box-body -->
<div class='box-footer'>
<button type='submit' class='btn btn-success'>Ingresar</button>
</div>
</form>
</div><!-- /.box -->
</section>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>SIPLAN</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- Bootstrap 3.3.2 -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
<link href="css/_all-skins.min.css" rel="stylesheet" type="text/css" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-11"> <h1 id="glyphicons" class="page-header">SIPLAN</h1>
</div>
<hr>
</div>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6"><?php echo $msg; ?></div>
<div class="col-md-3"></div>
</div>
</div>
<footer class="main-footer">
<div class="pull-right hidden-xs">
<b>Version</b> 5.0
</div>
<a href="#">Soporte</a>
</footer>
<script src="js/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='js/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="js/app.min.js" type="text/javascript"></script>
</body>
</html>
