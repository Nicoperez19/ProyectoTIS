<?php

require('conexion.php');


$nombre_recibido=$_POST['nombre_depto'];   
$correo_recibido=$_POST['correo_depto'];
$id_recibido=$_POST['input_id_oculto'];

$sql = "UPDATE  departamento SET id_depto='$id_recibido', nombre_depto='$nombre_recibido', correo_depto='$correo_recibido' WHERE id_depto='$id_recibido'";
$resultado= mysqli_query($conexion,$sql);
header('Location: departamento.php')
?>