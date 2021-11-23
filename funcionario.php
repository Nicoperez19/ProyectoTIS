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
    <title>Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="fondo" >
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 p-4">
                <h1 class="text-center fw-bold mt-4 mb-6 fond"> Funcionario</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 pb-4  p-4 bg-light">
                <form action="ingresar_fun.php" method="POST">
                    <input type="text" name="run_funcionario" placeholder="RUN">
                    <input type="text" name="nombre_funcionario" placeholder="Nombre">
                    <input type="text" name="correo_funcionario" placeholder="Correo">
                    <input type="text" name="cargo_funcionario" placeholder="Cargo">
                    <input type="text" name="direccion_funcionario" placeholder="Dirección">
                    <input type="text" name="telefono_funcionario" placeholder="Teléfono">
                    <input type="text" name="id_depto" placeholder="ID depto">
                    <button type="button,submit" class="btn btn-success">Ingresar</button>
                </form>
            </div>
            <div class="col-lg-4 p-4 col-md-12  bg-light text-center">
                <form action= "funcionario.php" method="POST">
                    <input type="text" name="buscar" placeholder="RUN Funcionario..."> 
                    <button type="submit" value= "Buscar"class="btn btn-success">Buscar</button>
                </form>
           </div>
        </div>

        <div class="row">
            <div class="col-12 bg-light border-2">
                <table style="width:100%">
                    <tr class="color bg-black text-white">
                        <th>RUN</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Cargo</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Departamento</th>
                        <th>Acciones</th>
                    </tr>

                    <?php
                    if(!isset($_POST['buscar'])){
                        $_POST['buscar'] ="";
                        $buscar = $_POST['buscar'];
                    }
                    $buscar = $_POST['buscar'];
                    $consulta= "SELECT* FROM funcionario WHERE run_funcionario LIKE '%".$buscar."%'";
                    
                    $resultado= mysqli_query($conexion,$consulta);
                    while($row= mysqli_fetch_assoc($resultado)){
                        $run_recibido = $row["run_funcionario"];
                        $nombre_recibido = $row["nombre_funcionario"];
                        $correo_recibido = $row["correo_funcionario"];
                        $cargo_recibido = $row["cargo_funcionario"];
                        $direccion_recibido = $row["direccion_funcionario"];
                        $telefono_recibido = $row["telefono_funcionario"];
                        $depto_recibido = $row["id_depto"];
                        echo "<tr>";
                        echo "<td>".$run_recibido."</td>";
                        echo "<td>".$nombre_recibido."</td>";
                        echo "<td>".$correo_recibido."</td>";
                        echo "<td>".$cargo_recibido."</td>";
                        echo "<td>".$direccion_recibido."</td>";
                        echo "<td>".$telefono_recibido."</td>";
                        echo "<td>".$depto_recibido."</td>";
                        echo "<td><a href='eliminar_fun.php?seleccionado=".$run_recibido."'>Eliminar</a> <a href='modificar_fun.php?seleccionado=".$run_recibido."'>Modificar</a></td>";
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