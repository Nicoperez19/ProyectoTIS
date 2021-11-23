<?php
require("conexion.php");

$run_recibido=$_GET["seleccionado"];

$sql = "DELETE FROM funcionario WHERE run_funcionario=$run_recibido";
$resultado= mysqli_query($conexion,$sql);
header('Location: funcionario.php')
?>