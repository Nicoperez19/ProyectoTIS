<?php

require('conexion.php');


$codigo_qr_recibido=$_POST["codigo_qr"];
$caracteristicas_recibido=$_POST["caracteristicas"];
$forma_adq_recibido=$_POST["forma_adquisicion"];
$costo_adq_recibido=$_POST["costo_adquisicion"];
$fecha_ing_recibido=$_POST["fecha_ingreso"];
$estado_recibido=$_POST["estado"];
$id_depto_recibido=$_POST["id_depto"];
$run_fun_recibido=$_POST["run_funcionario"];
$codigo_mun_recibido=$_POST["codigo_muni"];
$id_recibido=$_POST['input_id_oculto'];

$sql = "UPDATE  equipo SET id_equipo_inf='$id_recibido', codigo_qr='$codigo_qr_recibido', caracteristicas='$caracteristicas_recibido', forma_adquisicion='$forma_adq_recibido',
costo_adquisicion='$costo_adq_recibido', fecha_ingreso='$fecha_ing_recibido', estado='$estado_recibido', id_depto='$id_depto_recibido', run_funcionario='$run_fun_recibido', codigo_muni='$codigo_mun_recibido' WHERE id_equipo_inf='$id_recibido'";
$resultado= mysqli_query($conexion,$sql);
header('Location: equipo.php')
?>