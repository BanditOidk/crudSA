
<?php
include ("config.php");
 
	
	 $id_producto = $_POST['id_producto'];
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

	 $sql = "UPDATE productos SET marca='$marca',tipo='$tipo',nombre='$nombre',descripcion1='$descripcion1',descripcion2='$descripcion2',descripcion3='$descripcion3',descripcion4='$descripcion4',descripcion5='$descripcion5',descripcion6='$descripcion6',descripcion7='$descripcion7',descripcion8='$descripcion8',precio='$precio',imagen='$imagen'
	 WHERE id_producto='$id_producto'";
    $query = pg_query($conexion,$sql);

	 if($query){
		echo "<script>alert('Añadido con Exito') </script>";
        echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";
	 }
	else{
		echo "<script>alert('Error al Añadir') </script>";
        echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>"; 
}
?>