<?php

include("config.php");

	 $marca = $_POST['marca'];
	 $tipo = $_POST['tipo'];
	 $nombre = $_POST['nombre'];
     $descripcion1 = $_POST['descripcion1'];
     $descripcion2 = $_POST['descripcion2'];
     $descripcion3 = $_POST['descripcion3'];
     $descripcion4 = $_POST['descripcion4'];
     $descripcion5 = $_POST['descripcion5'];
     $descripcion6 = $_POST['descripcion6'];
     $descripcion7 = $_POST['descripcion7'];
     $descripcion8 = $_POST['descripcion8'];
	 $precio = $_POST['precio'];
	 $imagen = $_POST['imagen'];

     $sql = "INSERT INTO computadoras(marca,tipo,nombre,descripcion1,descripcion2,descripcion3,descripcion4,descripcion5,descripcion6,descripcion7,descripcion8,precio,imagen) 
	 values ('$marca','$tipo','$nombre','$descripcion1','$descripcion2','$descripcion3','$descripcion4','$descripcion5','$descripcion6','$descripcion7','$descripcion8','$precio','$imagen')";

$query= pg_query($conexion,$sql);

if($query){
        echo "<script>alert('Insertado con Exito') </script>";
        echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";
    
}else {
        echo "<script>alert('Error al Insertar') </script>";
        echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>"; 
}
?>