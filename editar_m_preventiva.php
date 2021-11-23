<?php

require('conexion.php');

$fecha_recibido = $_POST["fecha_proxima_mant"];
$codigo_recibido=$_POST['input_codigo_oculto'];

$sql = "UPDATE  m_preventiva SET codigo_mant='$codigo_recibido', fecha_proxima_mant='$fecha_recibido' where codigo_mant='$codigo_recibido'";
$resultado= mysqli_query($conexion,$sql);
header('Location: mantenimiento.php')
?>