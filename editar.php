<?php 
    include("config.php");

$id=$_GET['id'];

$sql="SELECT * FROM productos WHERE id_producto='$id'";
$query=pg_query($conexion,$sql);

$row=pg_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilos.css?<?=date('Y-m-d H:i:s')?>">
        <title>EDITAR</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">   
    </head>
  
<br><br><br><br><br><br><br><br><br><br>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_producto" value="<?php echo $row['id_producto']  ?>">
                                

                                <input type="text" class="form-control mb-3" name="marca" placeholder="" value="<?php echo $row['marca']  ?>">

                                <input type="text" class="form-control mb-3" name="tipo" placeholder="" value="<?php echo $row['tipo']  ?>">

                                <input type="text" class="form-control mb-3" name="nombre" placeholder="" value="<?php echo $row['nombre']  ?>">

                                <input type="text" class="form-control mb-3" name="descripcion1" placeholder="" value="<?php echo $row['descripcion1']  ?>">

                                <input type="text" class="form-control mb-3" name="descripcion2" placeholder="" value="<?php echo $row['descripcion2']  ?>">

                                <input type="text" class="form-control mb-3" name="descripcion3" placeholder="" value="<?php echo $row['descripcion3']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="descripcion4" placeholder="" value="<?php echo $row['descripcion4']  ?>">

                                <input type="text" class="form-control mb-3" name="descripcion5" placeholder="" value="<?php echo $row['descripcion5']  ?>">

                                <input type="text" class="form-control mb-3" name="descripcion6" placeholder="" value="<?php echo $row['descripcion6']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="descripcion7" placeholder="" value="<?php echo $row['descripcion7']  ?>">

                                <input type="text" class="form-control mb-3" name="descripcion8" placeholder="" value="<?php echo $row['descripcion8']  ?>">

                                <input type="text" class="form-control mb-3" name="imagen" placeholder="" value="<?php echo $row['imagen']  ?>">

                                <input type="text" class="form-control mb-3" name="precio" placeholder="" value="<?php echo $row['precio']  ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>