<?php
    require("conexion.php");
    $codigo_recibido=$_GET["seleccionado"];
    $consulta= "SELECT* FROM m_reactiva WHERE codigo_mant=$codigo_recibido";
    $resultado= mysqli_query($conexion,$consulta);

     while($row= mysqli_fetch_assoc($resultado))
        {
            $falla_recibido = $row["tipo_falla"];
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="fondo">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12 p-4">
                <h1 class="text-center fw-bold mt-4 mb-6"> Editar Mantenimiento Reactivo</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 pb-4 p-4  bg-light text-center">
                <form action="editar_m_reactiva.php" method="POST">  
                    <div class="fw-bold">
                        <spam>Falla</spam> 
                        <input type="text" name="tipo_falla" value="<?php echo "$falla_recibido" ?>">
                    </div>
                    <input type="hidden" name= "input_codigo_oculto" value="<?php echo "$codigo_recibido" ?>">
                    <br>
                    <button type="button,submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>