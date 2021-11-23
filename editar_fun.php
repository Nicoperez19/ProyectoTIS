<?php

require('conexion.php');

$run_recibido = $_POST["run_funcionario"];
$nombre_recibido = $_POST["nombre_funcionario"];
$correo_recibido = $_POST["correo_funcionario"];
$cargo_recibido = $_POST["cargo_funcionario"];
$direccion_recibido = $_POST["direccion_funcionario"];
$telefono_recibido = $_POST["telefono_funcionario"];
$depto_recibido = $_POST["id_depto"];

$sql = "UPDATE  funcionario SET run_funcionario='$run_recibido', nombre_funcionario='$nombre_recibido', 
correo_funcionario='$correo_recibido',cargo_funcionario='$cargo_recibido',direccion_funcionario='$direccion_recibido'
,telefono_funcionario='$telefono_recibido',id_depto='$depto_recibido'
WHERE run_funcionario='$run_recibido'"; 

$resultado= mysqli_query($conexion,$sql);
header('Location: funcionario.php')
?>