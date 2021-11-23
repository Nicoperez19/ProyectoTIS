<?php
require("conexion.php");

$codigo_recibido=$_GET["seleccionado"];

$sql = "DELETE FROM m_reactiva WHERE codigo_mant=$codigo_recibido";
$resultado= mysqli_query($conexion,$sql);
header('Location: mantenimiento.php')
?>