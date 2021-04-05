<?php
$con = mysqli_connect("localhost", 'usuario', '1234');
mysqli_select_db($con, "usuario");
$resultado = mysqli_query($con, "select * from persona");
?>