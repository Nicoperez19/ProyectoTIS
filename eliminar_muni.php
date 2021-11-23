<?php
require("conexion.php");

$codigo_recibido=$_GET["seleccionado"];

$sql = "DELETE FROM municipalidad WHERE codigo_muni=$codigo_recibido";
$resultado= mysqli_query($conexion,$sql);
header('Location: municipalidad.php')
?>