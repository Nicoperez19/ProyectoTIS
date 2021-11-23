<?php

require('conexion.php');

$codigo_recibido= $_POST["codigo_mant"];
$fecha_recibido = $_POST["fecha_proxima_mant"];

$sql = "INSERT INTO  m_preventiva (codigo_mant, fecha_proxima_mant) VALUES ('$codigo_recibido', '$fecha_recibido')";
$resultado= mysqli_query($conexion,$sql);
header('Location: mantenimiento.php')
?>