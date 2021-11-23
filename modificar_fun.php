<?php
    require("conexion.php");
    $run_recibido=$_GET["seleccionado"];
    $consulta= "SELECT* FROM funcionario WHERE run_funcionario=$run_recibido";
    $resultado= mysqli_query($conexion,$consulta);

     while($row= mysqli_fetch_assoc($resultado))
        {
                        $run_recibido = $row["run_funcionario"];
                        $nombre_recibido = $row["nombre_funcionario"];
                        $correo_recibido = $row["correo_funcionario"];
                        $cargo_recibido = $row["cargo_funcionario"];
                        $direccion_recibido = $row["direccion_funcionario"];
                        $telefono_recibido = $row["telefono_funcionario"];
                        $depto_recibido = $row["id_depto"];
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="fondo">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12 p-4">
                <h1 class="text-center fw-bold mt-4 mb-6"> Editar Funcionario</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-5 col-md-12"></div>
            <div class="col-lg-2 col-md-12 pb-4 p-4  bg-light text-center">
                
                <form action="editar_fun.php" method="POST">
                
                    <div class="fw-bold">
                        <spam class="d-flex">RUN</spam>
                        <input type="text" name= "run_funcionario" value="<?php echo "$run_recibido" ?>">
                    </div>
                    <div class="fw-bold">
                        <spam class="d-flex">Nombre</spam>
                        <input type="text" name="nombre_funcionario" value="<?php echo "$nombre_recibido" ?>">
                    </div>
                    <div class="fw-bold">
                        <spam class="d-flex">Correo</spam>    
                        <input type="text" name= "correo_funcionario" value="<?php echo "$correo_recibido" ?>">
                    </div>
                    <div class="fw-bold">
                        <spam class="d-flex">Cargo</spam>
                        <input type="text" name= "cargo_funcionario" value="<?php echo "$cargo_recibido" ?>">
                    </div>
                    <div class="fw-bold">
                        <spam class="d-flex">Dirección</spam>
                        <input type="text" name= "direccion_funcionario" value="<?php echo "$direccion_recibido" ?>">
                    </div>
                    <div class="fw-bold">
                        <spam class="d-flex">Teléfono</spam>
                        <input type="text" name= "telefono_funcionario" value="<?php echo "$telefono_recibido" ?>">
                    </div>
                    <div class="fw-bold">
                        <spam class="d-flex">ID depto</spam>
                        <input type="text" name= "id_depto" value="<?php echo "$depto_recibido" ?>">
                    </div>
                    <br>
                    <button type="button,submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
            <div class="col-lg-5 col-md-12"></div>
        </div>
    </div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>