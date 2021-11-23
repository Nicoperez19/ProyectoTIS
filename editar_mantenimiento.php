<?php

require('conexion.php');

$fecha_recibido = $_POST["fecha_mant"];
$fecha_ult_recibido = $_POST["fecha_ultimo_mant"];
$codigo_recibido=$_POST['input_codigo_oculto'];

$sql = "UPDATE  mantenimiento SET codigo_mant='$codigo_recibido', fecha_mant='$fecha_recibido', fecha_ultimo_mant='$fecha_ult_recibido' where codigo_mant='$codigo_recibido'";
$resultado= mysqli_query($conexion,$sql);
header('Location: mantenimiento.php')
?>