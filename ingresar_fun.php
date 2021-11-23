<?php

require('conexion.php');

$run_recibido = $_POST["run_funcionario"];
$nombre_recibido = $_POST["nombre_funcionario"];
$correo_recibido = $_POST["correo_funcionario"];
$cargo_recibido = $_POST["cargo_funcionario"];
$direccion_recibido = $_POST["direccion_funcionario"];
$telefono_recibido = $_POST["telefono_funcionario"];
$depto_recibido = $_POST["id_depto"];

$sql = "INSERT INTO  funcionario (run_funcionario, nombre_funcionario, correo_funcionario,cargo_funcionario,direccion_funcionario
,telefono_funcionario,id_depto) 
VALUES ('$run_recibido', '$nombre_recibido', '$correo_recibido','$cargo_recibido','$direccion_recibido','$telefono_recibido','$depto_recibido')";
$resultado= mysqli_query($conexion,$sql);
header('Location: funcionario.php')
?>