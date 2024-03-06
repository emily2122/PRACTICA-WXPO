<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA DE PRODUCTOS</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>Cod. Producto</td>
                        <td>Producto</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Categoria</td>
                        <td>F. Elaboracion</td>
                        <td>F. Caducidad</td>
                        <td>Eliminar</td>
                        <td>Editar</td>
                    </tr>

                    <?php
                    include("config/conexion.php");
                    $consulta = "SELECT * FROM productos";//variable
                    if ($resultado = $conn->query($consulta)) 
                    {
                         while ($filas = $resultado->fetch_assoc()) 
                        {
                         $cod_producto = $filas["cod_producto"];
                         $nom_producto= $filas["nom_producto"];
                         $precio= $filas["precio"];
                         $cantidad= $filas["cantidad"];
                         $cod_categoria= $filas["cod_categoria"];
                         $fecha_elab= $filas["fecha_elab"];
                         $fecha_cad= $filas["fecha_cad"];

                         echo '<tr>
                         <td>'.$cod_producto.'</td>
                         <td>'.$nom_producto.'</td>
                         <td>'.$precio.'</td>
                         <td>'.$cantidad.'</td>
                         <td>'.$cod_categoria.'</td>
                         <td>'.$fecha_elab.'</td>
                         <td>'.$fecha_cad.'</td>
                         <td><a href="eliminar_producto.php?cod_producto='.$cod_producto.'" class="btn btn-danger">Eliminar</a></td>
                         <td><a href="editar.php?cod_producto='.$cod_producto.'" class="btn btn-danger">Editar</a></td>
                         </tr>';
                        }
                      
                    }
                    mysqli_close($conn);   
                    ?>
                </table>

            </div>

        </div>

    </div>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>
