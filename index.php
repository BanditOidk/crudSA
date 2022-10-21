


<?php 
    include("config.php");


    $sql="SELECT *  FROM productos";
    $query=pg_query($conexion,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inicio</title>
</head>
    <body>
            <div class="container mt-14">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Nueva Venta</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="marca" placeholder="marca">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <div class=" form-control mb-3">
		<textarea type="text" name="descripcion1" placeholder="Descipcion" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
		</div>
		<div class="form-control mb-3">
		<textarea type="text" name="descripcion2" placeholder="Descipcion" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
		</div>
		<div class="form-control mb-3">
		<textarea type="text" name="descripcion3" placeholder="Descipcion" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
		</div>
		<div class="form-control mb-3">
		<textarea type="text" name="descripcion4" placeholder="Descipcion" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
		</div>
		<div class="form-control mb-3">
		<textarea type="text" name="descripcion5" placeholder="Descipcion" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
		</div>
		<div class="form-control mb-3">
		<textarea type="text" name="descripcion6" placeholder="Descipcion" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
		</div>
		<div class="form-control mb-3">
		<textarea type="text" name="descripcion7" placeholder="Descipcion" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
		</div>
		<div class="form-control mb-3">
		<textarea type="text" name="descripcion8" placeholder="Descipcion" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
		</div>
                                    <input type="text" class="form-control mb-3" name="imagen" placeholder="imagen">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                            <thead class="table-success table-striped" >
                                    <tr>
                                        <th>No Producto</th>
                                        <th>Marca</th>
                                        <th>Tipo</th>
                                        <th>Nombre</th>
                                        
                                        <th>Imagen</th>
                                        <th>Precio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                            while($row=pg_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_producto']?></th>
                                                <th><?php  echo $row['marca']?></th>
                                                <th><?php  echo $row['tipo']?></th>
                                                <th><?php  echo $row['nombre']?></th>    
                                                   
                                                <th><?php  echo $row['imagen']?></th>    
                                                <th>S/.<?php  echo $row['precio']?></th>    
                                                <th><a href="editar.php?id=<?php echo $row['id_producto']?>">Editar</a>
                                                    <a href="delete.php?id=<?php echo $row['id_producto']?>">Eliminar</a></th>
                                                                                    
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>