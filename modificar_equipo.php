<?php
    require("conexion.php");
    $id_recibido=$_GET["seleccionado"];
    $consulta= "SELECT* FROM equipo WHERE id_equipo_inf=$id_recibido";
    $resultado= mysqli_query($conexion,$consulta);

     while($row= mysqli_fetch_assoc($resultado))
        {
            $codigo_qr_recibido = $row["codigo_qr"];
            $caracteristicas_recibido = $row["caracteristicas"];
            $forma_adq_recibido = $row["forma_adquisicion"];
            $costo_adq_recibido = $row["costo_adquisicion"];
            $fecha_ing_recibido = $row["fecha_ingreso"];
            $estado_recibido = $row["estado"];
            $id_depto_recibido = $row["id_depto"];
            $run_fun_recibido = $row["run_funcionario"];
            $codigo_mun_recibido = $row["codigo_muni"];
        }
?>

<!DOCTYPE html>
<html lang="es">
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
        
            <div class="col-lg-5 col-md-12"></div>
            
            <div class="col-lg-2 col-md-12 pb-4 p-4 bg-light ">
                <form action="editar_equipo.php" method="POST">
                    <div class="fw-bold">
                        <spam class="d-flex">Código</spam>
                        <input type="text" name="codigo_qr" value="<?php echo "$codigo_qr_recibido" ?>" >
                    </div> 
                    <div class="fw-bold">
                        <spam class="d-flex">Características</spam>
                        <input type="text" name="caracteristicas" value="<?php echo "$caracteristicas_recibido" ?>">
                    </div>  
                    <div class="fw-bold">
                        <spam class="d-flex">Forma adquisición</spam>
                        <input type="text" name="forma_adquisicion" value="<?php echo "$forma_adq_recibido" ?>">
                    </div> 
                    <div class="fw-bold">
                        <spam class="d-flex">Costo adquisición</spam>
                        <input type="text" name="costo_adquisicion" value="<?php echo "$costo_adq_recibido" ?>">
                    </div> 
                    <div class="fw-bold">
                        <spam class="d-flex">Fecha ingreso</spam>
                        <input type="date" name="fecha_ingreso" value="<?php echo "$fecha_ing_recibido" ?>">
                    </div> 
                    <div class="fw-bold">
                        <spam class="d-flex">Estado</spam>
                        <input type="text" name="estado" value="<?php echo "$estado_recibido" ?>">
                    </div>
                    <div class="fw-bold">
                        <spam class="d-flex">ID depto</spam>
                        <input type="text" name="id_depto" value="<?php echo "$id_depto_recibido" ?>">
                    </div>
                    <div class="fw-bold">
                        <spam class="d-flex">RUN funcionario</spam>
                        <input type="text" name="run_funcionario" value="<?php echo "$run_fun_recibido" ?>">
                    </div>
                    <div class="fw-bold">
                        <spam class="d-flex">Código municipalidad</spam>
                        <input type="text" name="codigo_muni" value="<?php echo "$codigo_mun_recibido" ?>">
                    </div>

                    <input type="hidden" name= "input_id_oculto" value="<?php echo "$id_recibido" ?>"><br>
                    <button type="button,submit" class="btn btn-success ms-4">Guardar</button>
                </form>
            </div>

            <div class="col-lg-5 col-md-12"></div>
        </div>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>