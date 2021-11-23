<?php
    $alert = '';
    if(!empty($_POST)){
        if(empty($_POST['run_funcionario']) || empty($_POST['contrasena'])){  
            $alert ='Ingrese su usuario y su contraseña';
        }
        else{
            require_once "conexion.php";
            $usuario = $_POST['run_funcionario'];
            $contrasena = $_POST['contrasena'];
            $query = mysqli_query($conexion,"SELECT * FROM `login` WHERE run_funcionario = '$usuario' AND contrasena = '$contrasena'");
            $result = mysqli_num_rows($query);
            if($result>0){
                session_start();
                header('location: menu.php');
            }
            else{
                echo "<div class='form' style=font-size:150%;font-family:Arial, Helvetica, sans-serif;><p>Usuario/Contraseña Incorrecto</div>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Login</title>
</head>
<body class="fondo">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12 p-4">
                <h1 class="text-center fw-bold mt-4 mb-6" style="font-family:Arial, Helvetica, sans-serif;"> Inicio Sesión</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-2" style="font-family:Arial, Helvetica, sans-serif;">
                <form action="" method= "post">
                    <center>  
                        <input type="text" name="run_funcionario" placeholder="Usuario" required>
                    </center> 
                    <center>
                        <input type="password" name="contrasena" placeholder="Contraseña" required>
                    </center >
                    <center>
                    <button type="button,submit" class="btn btn-outline-dark" style="margin-top:1%;">I n g r e s a r</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>