<?php

include("config.php");

$id_producto=$_GET['id'];

$sql="DELETE FROM productos  WHERE id_producto='$id_producto'";
$query=pg_query($conexion,$sql);

if($query){
    echo "<script>alert('Eliminado con exito') </script>";
    echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";
}else{
    echo "<script>alert('Error al Eliminar') </script>";
    echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";
}
?>
