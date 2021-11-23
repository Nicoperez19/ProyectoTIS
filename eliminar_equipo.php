<?php
require("conexion.php");

$id_recibido=$_GET["seleccionado"];

$sql = "DELETE FROM equipo WHERE id_equipo_inf=$id_recibido";
$resultado= mysqli_query($conexion,$sql);
header('Location: equipo.php')
?>