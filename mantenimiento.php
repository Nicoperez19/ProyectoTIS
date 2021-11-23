<?php
    require("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="fondo">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 p-4">
                <h1 class="text-center fw-bold mt-4 mb-6"> Mantenimiento</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 pb-4  p-4 bg-light text-center">
                <form action="ingresar_mantenimiento.php" method="POST">
                    <input type="date" name="fecha_mant" >
                    <input type="date" name="fecha_ultimo_mant">
                    <button type="button,submit" class="btn btn-success">Ingresar</button>
                </form>
            </div>        
            <div class="col-lg-4 col-md-12  pb-4  p-4 bg-light text-center">
                <form action= "mantenimiento.php" method="POST">
                    <input type="text" name="buscar" placeholder="Código Mantenimiento"> 
                    <button type="submit" value= "Buscar"class="btn btn-success">Buscar</button>
                </form>
            </div>
        </div>
       

        <div class="row">
            <div class="col-12 bg-light border-2 text-center">
                <table style="width:100%">
                    <tr class="color bg-black text-white">
                        <th>Código</th>
                        <th>Fecha de mantenimiento</th>
                        <th>Fecha último mantenimiento</th>
                        <th>Acciones</th>

                    </tr>

                    <?php
                    if(!isset($_POST['buscar'])){
                        $_POST['buscar'] ="";
                        $buscar = $_POST['buscar'];
                    }
                    $buscar = $_POST['buscar'];
                    $consulta= "SELECT* FROM mantenimiento WHERE codigo_mant LIKE '%".$buscar."%'";
                    $resultado= mysqli_query($conexion,$consulta);    
                    while($row= mysqli_fetch_assoc($resultado)){
                        $codigo_recibido = $row["codigo_mant"];
                        $fecha_recibido = $row["fecha_mant"];
                        $fecha_ult_recibido = $row["fecha_ultimo_mant"];
                                                
                        echo "<tr>";
                        echo "<td>".$codigo_recibido."</td>";
                        echo "<td>".$fecha_recibido."</td>";
                        echo "<td>".$fecha_ult_recibido."</td>";
                        echo "<td><a href='eliminar_mantenimiento.php?seleccionado=".$codigo_recibido."'>Eliminar</a> <a href='modificar_mantenimiento.php?seleccionado=".$codigo_recibido."'>Modificar</a></td>";                       
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>

        <div class="row bg-light">
            <div class="col-lg-6 col-md-12 border text-center">
                <h1 class="text-center mt-4 mb-4"> Preventivo</h1>

                <div class="row">
                    <div class="col-12 pb-4  p-4 bg-light text-center">
                        <form action="ingresar_m_preventiva.php" method="POST">
                            <input type="text" name="codigo_mant" placeholder="Código" >
                            <input type="date" name="fecha_proxima_mant">
                            <button type="button,submit" class="btn btn-success">Ingresar</button>
                        </form>
                    </div>
                </div>

                <table style="width:100%">
                    <tr class="color bg-black text-white">
                        <th>Código</th>
                        <th>Fecha próximo mantenimiento</th>
                        <th>Acciones</th>
                    </tr>

                    <?php
                    $consulta= "SELECT* FROM m_preventiva";
                    $resultado= mysqli_query($conexion,$consulta);

                    while($row= mysqli_fetch_assoc($resultado)){
                        $codigo_recibido = $row["codigo_mant"];
                        $fecha_recibido = $row["fecha_proxima_mant"];
                        
                        echo "<tr>";
                        echo "<td>".$codigo_recibido."</td>";
                        echo "<td>".$fecha_recibido."</td>";
                        echo "<td><a href='eliminar_m_preventiva.php?seleccionado=".$codigo_recibido."'>Eliminar</a> <a href='modificar_m_preventiva.php?seleccionado=".$codigo_recibido."'>Modificar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
            <div class="col-lg-6 col-md-12 border text-center">
                <h1 class="text-center mt-4 mb-4">  Reactivo</h1>
                
                <div class="row">
                    <div class="col-12 pb-4  p-4 bg-light text-center">
                        <form action="ingresar_m_reactiva.php" method="POST">
                            <input type="text" name="codigo_mant" placeholder="Código" >
                            <input type="text" name="tipo_falla" placeholder="Falla">
                            <button type="button,submit" class="btn btn-success">Ingresar</button>
                        </form>
                    </div>
                </div>
                
                <table style="width:100%">
                    <tr class="color bg-black text-white">
                        <th>Código</th>
                        <th>Falla</th>
                        <th>Acciones</th>
                    </tr>

                    <?php
                    $consulta= "SELECT* FROM m_reactiva";
                    $resultado= mysqli_query($conexion,$consulta);

                    while($row= mysqli_fetch_assoc($resultado)){
                        $codigo_recibido = $row["codigo_mant"];
                        $fecha_recibido = $row["tipo_falla"];
                                                
                        echo "<tr>";
                        echo "<td>".$codigo_recibido."</td>";
                        echo "<td>".$fecha_recibido."</td>";
                        echo "<td><a href='eliminar_m_reactiva.php?seleccionado=".$codigo_recibido."'>Eliminar</a> <a href='modificar_m_reactiva.php?seleccionado=".$codigo_recibido."'>Modificar</a></td>";                                             
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