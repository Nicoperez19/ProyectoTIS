<?php
require_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Menu</title>
</head>
<body class="fondo">
<div class="container-fluid">
    
    <div class="row">
        <div class="col-12 p-4">
            <h1 class="text-center fw-bold mt-4 mb-6" style="font-size:260%;font-family:Arial, Helvetica, sans-serif;">B I E N V E N I D @</h1>
        </div>
        
        
    </div>
    <div class="row">
        <div class="col-12">
            <h1 class="text-center fw-bold mt-4 mb-6" style="font-size:160%;font-family:Arial, Helvetica, sans-serif;">¿Qué deseas ver?</h1>
        </div>
    </div>
    
    
    <div class="row mt-5">
        <div class="col-2"></div>
            <div class=" btn-group col-lg-4 col-md-12" role="group">
                <button onclick="location.href='equipo.php'" class="btn btn-outline-dark">Equipo informático</button>
            </div>
            <div class=" btn-group col-lg-4 col-md-12" role="group">
                <button onclick="location.href='funcionario.php'" class="btn btn-outline-dark">Funcionario</button>        
            </div>
        <div class="col-2"></div>
    </div>
    
    
    
    <div class="row mt-2">
        <div class="col-2"></div>
            <div class=" btn-group col-lg-4 col-md-12" role="group">
                <button onclick="location.href='departamento.php'" class="btn btn-outline-dark">Departamento</button>
            </div>
            <div class=" btn-group col-lg-4 col-md-12" role="group">
                <button onclick="location.href='mantenimiento.php'" class="btn btn-outline-dark">Mantenimiento</button>
            </div>
        <div class="col-2"></div>
    </div>


    
    <div class="row mt-2">
        <div class="col-3"></div>
            <div class=" btn-group col-lg-6 col-md-12" role="group">
                <button onclick="location.href='municipalidad.php'" class="btn btn-outline-dark">Municipalidad</button>
            </div>
        <div class="col-3"></div>
    </div>

    <div class="row">
        <div class="col-12 boton p-4">
            <button onclick="location.href='index.php'" class="btn btn-outline-dark">Cerrar Sesión</button>   
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>