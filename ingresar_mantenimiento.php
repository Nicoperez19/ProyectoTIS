<?php

require('conexion.php');

$fecha_recibido = $_POST["fecha_mant"];
$fecha_ult_recibido = $_POST["fecha_ultimo_mant"];

$sql = "INSERT INTO  mantenimiento (codigo_mant, fecha_mant, fecha_ultimo_mant) VALUES ('$codigo_recibido', '$fecha_recibido', '$fecha_ult_recibido')";
$resultado= mysqli_query($conexion,$sql);
header('Location: mantenimiento.php')
?>