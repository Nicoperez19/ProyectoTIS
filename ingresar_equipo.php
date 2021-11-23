<?php

require('conexion.php');

$codigo_qr_recibido = $_POST["codigo_qr"];
$caracteristicas_recibido = $_POST["caracteristicas"];
$forma_adq_recibido = $_POST["forma_adquisicion"];
$costo_adq_recibido = $_POST["costo_adquisicion"];
$fecha_ing_recibido = $_POST["fecha_ingreso"];
$estado_recibido = $_POST["estado"];
$id_depto_recibido = $_POST["id_depto"];
$run_fun_recibido = $_POST["run_funcionario"];
$codigo_mun_recibido = $_POST["codigo_muni"];

$sql = "INSERT INTO  equipo (codigo_qr, caracteristicas, forma_adquisicion,
costo_adquisicion, fecha_ingreso, estado,id_depto, run_funcionario, codigo_muni) 
VALUES ('$codigo_qr_recibido', '$caracteristicas_recibido', '$forma_adq_recibido','$costo_adq_recibido',
'$fecha_ing_recibido','$estado_recibido','$id_depto_recibido','$run_fun_recibido','$codigo_mun_recibido')";
$resultado= mysqli_query($conexion,$sql);
header('Location: equipo.php')
?>