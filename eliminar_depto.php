<?php
require("conexion.php");

$id_recibido=$_GET["seleccionado"];

$sql = "DELETE FROM departamento WHERE id_depto=$id_recibido";
$resultado= mysqli_query($conexion,$sql);
header('Location: departamento.php')
?>