<?php

require('conexion.php');

$id_recibido=$_POST['id_depto'];
$nombre_recibido=$_POST['nombre_depto'];   
$correo_recibido=$_POST['correo_depto'];

$sql = "INSERT INTO  departamento (id_depto, nombre_depto, correo_depto) VALUES ('$id_recibido', '$nombre_recibido', '$correo_recibido')";
$resultado= mysqli_query($conexion,$sql);
header('Location: departamento.php')
?>