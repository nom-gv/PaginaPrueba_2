<?php
include "conexion.inc.php";
$resultado = mysqli_query($con, "select * from mascota");
include "../Templates/cabecera.inc.php";
include "../Templates/cuerpoinfo.inc.php";
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$consulta="SELECT * FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas) { 	
	header("location:user.php");	
}
mysqli_free_result($resultado);
mysqli_close($con);
include "../Templates/pie.inc.php";
?>