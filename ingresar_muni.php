<?php

require('conexion.php');

$codigo_recibido=$_POST['codigo_muni'];
$nombre_recibido=$_POST['nombre_muni'];
$direccion_recibido=$_POST['direccion_muni'];
$telefono_recibido=$_POST['telefono_muni'];   
$correo_recibido=$_POST['correo_muni'];

$sql = "INSERT INTO  municipalidad (codigo_muni, nombre_muni, direccion_muni, telefono_muni, correo_muni) VALUES ('$codigo_recibido', '$nombre_recibido', '$direccion_recibido','$telefono_recibido','$correo_recibido')";
$resultado= mysqli_query($conexion,$sql);
header('Location: municipalidad.php')
?>