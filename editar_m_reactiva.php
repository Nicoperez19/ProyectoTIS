<?php

require('conexion.php');

$falla_recibido = $_POST["tipo_falla"];
$codigo_recibido=$_POST['input_codigo_oculto'];

$sql = "UPDATE  m_reactiva SET codigo_mant='$codigo_recibido', tipo_falla='$falla_recibido' where codigo_mant='$codigo_recibido'";
$resultado= mysqli_query($conexion,$sql);
header('Location: mantenimiento.php')
?>