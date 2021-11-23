<?php
    require("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="fondo">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12 p-4">
                <h1 class="text-center fw-bold mt-4 mb-6"> Equipo</h1>
            </div>
        </div>   

        <div class="row">
            <div class="col-lg-9 col-md-12 p-4 bg-light ">
                <form action="ingresar_equipo.php" method="POST">
                    <input type="text" name="id_equipo_inf" placeholder="ID">
                    <input type="text" name="codigo_qr" placeholder="QR">
                    <input type="text" name="caracteristicas" placeholder="Características">
                    <input type="text" name="forma_adquisicion" placeholder="Forma adquisición">
                    <input type="text" name="costo_adquisicion" placeholder="Costo adquisición">
                    <input type="date" name="fecha_ingreso">
                    <input type="text" name="estado" placeholder="Estado">
                    <input type="text" name="id_depto" placeholder="ID depto">
                    <input type="text" name="run_funcionario" placeholder="RUN funcionario">
                    <input type="text" name="codigo_muni" placeholder="Codigo municipalidad">
                    <button type="button,submit" class="btn btn-success">Ingresar</button>
                </form>
            </div>
           <div class="col-lg-3 col-md-12 p-4 bg-light text-center">
                <form action= "equipo.php" method="POST">
                <input type="text" name="buscar" placeholder="ID Equipo..."> 
                <button type="submit" value= "Buscar"class="btn btn-success">Buscar</button>
                </form>
           </div>
        </div>
        
        <div class="row">
            <div class="col-12 fond bg-light order-2">
                <table style="width:100%">
                    <tr class="color bg-black text-white">
                        <th>ID</th>
                        <th>Código QR</th>
                        <th>Características</th>
                        <th>Forma de adquisición</th>
                        <th>Costo de adquisición</th>
                        <th>Fecha de ingreso</th>
                        <th>Estado</th>
                        <th>ID del departamento</th>
                        <th>RUN funcionario</th>
                        <th>Código municipalidad</th>
                        <th>Acciones</th>
                    </tr>

                    <?php
                    if(!isset($_POST['buscar'])){
                        $_POST['buscar'] ="";
                        $buscar = $_POST['buscar'];
                    }
                    $buscar = $_POST['buscar'];
                    $consulta= "SELECT* FROM equipo WHERE id_equipo_inf LIKE '%".$buscar."%'";
                    $resultado= mysqli_query($conexion,$consulta);

                    while($row= mysqli_fetch_assoc($resultado)){
                        $id_recibido = $row["id_equipo_inf"];
                        $codigo_qr_recibido = $row["codigo_qr"];
                        $caracteristicas_recibido = $row["caracteristicas"];
                        $forma_adq_recibido = $row["forma_adquisicion"];
                        $costo_adq_recibido = $row["costo_adquisicion"];
                        $fecha_ing_recibido = $row["fecha_ingreso"];
                        $estado_recibido = $row["estado"];
                        $id_depto_recibido = $row["id_depto"];
                        $run_fun_recibido = $row["run_funcionario"];
                        $codigo_mun_recibido = $row["codigo_muni"];
                        echo "<tr>";
                        echo "<td>".$id_recibido."</td>";
                        echo "<td>".$codigo_qr_recibido."</td>";
                        echo "<td>".$caracteristicas_recibido."</td>";
                        echo "<td>".$forma_adq_recibido."</td>";
                        echo "<td>".$costo_adq_recibido."</td>";
                        echo "<td>".$fecha_ing_recibido."</td>";
                        echo "<td>".$estado_recibido."</td>";
                        echo "<td>".$id_depto_recibido."</td>";
                        echo "<td>".$run_fun_recibido."</td>";
                        echo "<td>".$codigo_mun_recibido."</td>";
                        echo "<td><a href='eliminar_equipo.php?seleccionado=".$id_recibido."'>Eliminar</a> <a href='modificar_equipo.php?seleccionado=".$id_recibido."'>Modificar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 boton p-4">
                <button onclick="location.href='menu.php'" class="btn btn-outline-dark">Atrás</button>   
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>