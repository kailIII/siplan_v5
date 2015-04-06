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


function encriptar(){
  //encriptamos la clave usando sha, despues una palabra que no este en diccionario, y por ultimo guadamos todo en md5
   $cve = sha1($_POST['clave']);
   $cve = $cve."7436nfoifjhsdSDSDFSOD9873#&&9.ls;lo";
   $cve = md5($cve);
   return($cve);
}
//mandamos llamar la función para encriptar
$clave = encriptar();
$usr = $_POST['usuario'];
//consultamos que el usuario este en la base de datos
$ConsultarUsuario = "SELECT count(*) FROM usuarios WHERE usuario = '$usr' AND clave = '$clave'";
$Resultado = $conexion->query($ConsultarUsuario);
echo $ConsultarUsuario;
    $row = $Resultado->fetch_array();
//si encuentra un usuario registramos las variables de sesion y abrimos el FrontEnd

if($row[0]){
 session_start();
 require_once 'registro_variables.php';
 header("location:../main.php");
 $conexion->close();
}else{
//si no encuentra nada cierra conexión, destruye variables y sesiones y regresa a la pagina principal mosando mensaje de error
 $conexion->close();
 unset($_SESSION);
 session_destroy();
 header("location:../index.php?mensaje=1");
 exit();
}
}
?>
