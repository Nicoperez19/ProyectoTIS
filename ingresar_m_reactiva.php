<?php

require('conexion.php');

$codigo_recibido= $_POST["codigo_mant"];
$falla_recibido = $_POST["tipo_falla"];

$sql = "INSERT INTO  m_reactiva (codigo_mant, tipo_falla) VALUES ('$codigo_recibido', '$falla_recibido')";
$resultado= mysqli_query($conexion,$sql);
header('Location: mantenimiento.php')
?>