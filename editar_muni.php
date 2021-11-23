<?php

require('conexion.php');

$nombre_recibido=$_POST['nombre_muni'];
$direccion_recibido=$_POST['direccion_muni'];
$telefono_recibido=$_POST['telefono_muni'];
$correo_recibido=$_POST['correo_muni'];
$codigo_recibido=$_POST['input_codigo_oculto'];

$sql = "UPDATE municipalidad SET codigo_muni='$codigo_recibido', nombre_muni='$nombre_recibido', direccion_muni='$direccion_recibido', telefono_muni='$telefono_recibido',correo_muni='$correo_recibido' WHERE codigo_muni='$codigo_recibido'";
$resultado= mysqli_query($conexion,$sql);
header('Location: municipalidad.php')
?>