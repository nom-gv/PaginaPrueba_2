<?php
include "conexion.inc.php";
$usuario=$_GET['usuario'];
$resultadoP = mysqli_query($con, "SELECT * FROM usuario u, persona p WHERE  u.usuario = '$usuario' AND u.ci = p.ci");
$resultadoP = mysqli_fetch_array($resultadoP);
$resultadoU = mysqli_query($con, "SELECT * FROM usuario WHERE usuario = '$usuario'");
$resultadoU = mysqli_fetch_array($resultadoU);
$resultadoC = mysqli_query($con, "SELECT * FROM color WHERE usuario = '$usuario'");
$resultadoC1 = mysqli_fetch_array($resultadoC);
$resultadoC2 = mysqli_fetch_array($resultadoC);
$resultadoC3 = mysqli_fetch_array($resultadoC);
include "../Templates/cabeceraUser.inc.php";
include "../Templates/navegadorUser.inc.php";
include "../Templates/cuerpoUserInf.inc.php";
$color1=$_POST['cabeza'];
$color2=$_POST['LCabeza'];
$color3=$_POST['pieP'];
$co1=$resultadoC1['id_color'];
$co2=$resultadoC2['id_color'];
$co3=$resultadoC3['id_color'];
if($color1 != '' || $color2 != '' || $color3 != ''){
	header("Location: userConfigInf.php?usuario=$usuario");
	mysqli_query($con, "UPDATE color SET color = '$color1' WHERE color.id_color = '$co1'");
	mysqli_query($con, "UPDATE color SET color = '$color2' WHERE color.id_color = '$co2'");
	mysqli_query($con, "UPDATE color SET color = '$color3' WHERE color.id_color = '$co3'");
}
include "../Templates/pieUser.inc.php";
?>