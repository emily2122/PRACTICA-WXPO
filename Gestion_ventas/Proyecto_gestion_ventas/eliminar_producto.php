<?php
include("config/conexion.php");

$cod_producto = $_GET["cod_producto"];

$consulta = "DELETE FROM productos WHERE cod_producto = '$cod_producto'";

if ($conn->query($consulta) === TRUE) {
  header("Location: index.php");
} else {
  echo "Error al eliminar el producto.";
}

mysqli_close($conn);
?>
