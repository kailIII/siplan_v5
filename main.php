<?php
ini_set('display_errors','1');
require_once 'clases/logout.php';
session_start();
if(!$_SESSION['activo']){
    unset($_SESSION);
    session_destroy();
    header('Location: index.php?mesaje=2');
}
require_once('conexion.php');
//se carga el encabezado
$ConsultaDatosUsuario = "SELECT * FROM usuarios WHERE id_usuario = ".$_SESSION['id_usuario'];
$ResultadoUsr = $conexion->query($ConsultaDatosUsuario);
$InfoUsuario = $ResultadoUsr->fetch_assoc();
require_once('header.php');
//se carga el menulateral
require_once('menu.php');
//se cargan los contenidos
require_once('contenido.php');
//se carga el pie de pàgina
require_once('footer.php');
?>
