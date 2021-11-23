<?php
require("conexion.php");

$codigo_recibido=$_GET["seleccionado"];

$sql = "DELETE FROM mantenimiento WHERE codigo_mant=$codigo_recibido";
$resultado= mysqli_query($conexion,$sql);
header('Location: mantenimiento.php')
?>