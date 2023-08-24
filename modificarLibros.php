<?php
  
  $consulta=ConsultarLibros($_GET['nombre']);

  function ConsultarLibros($nombre)
  {
    include 'conexion.php';
    $sentencia= "SELECT * FROM libros WHERE nombre='".$nombre."'";
    $resultado= $conexion->query($sentencia) or die ("Error al consultar libro".mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();

    return [
      $fila['nombre'],
      $fila['autor'],
      $fila['editorial'],
      $fila['anioPublicacion'],
      $fila['precio']
    ];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Libros</title>
    <link rel="stylesheet" href="estilos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
        
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html">LibrosDB <span class="nombreSpan">BackEnd</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link"  href="librosDB.php">LibrosDB</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./ingresarLibros.php">Ingresar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="contenedor">
            <h3>Bienvenidos a LibrosDB</h3>
            <h4>Modifica la Info del Libro</h4>

        <form action="./mod_libro.php" method="POST">

            <label class="label" for="nombre">Nombre:</label>
            <br><input class="nombre" type="text" id="nombre" name="nombre" value="<?php echo $consulta[0] ?>"><br>
        
            <label class="label" for="autor">Autor:</label>
            <br><input class="autor" type="text" id="autor" name="autor" value="<?php echo $consulta[1] ?>"><br>

            <label class="label" for="editorial">Editorial:</label>
            <br><input class="editorial" type="text" id="editorial" name="editorial" value="<?php echo $consulta[2] ?>"><br>
            
            <label class="label" for="anioPublicacion">Año de Publicación:</label>
            <br><input class="anioPublicacion" type="number" id="anioPublicacion" name="anioPublicacion" value="<?php echo $consulta[3] ?>"><br>

            <label class="label" for="precio">Precio:</label>
            <br><input class="precio" type="number" id="precio" name="precio" value="<?php echo $consulta[4] ?>"><br>
      
            <br><br>
            
            <button type="submit" class="boton">Modificar</button>
        </form>
      </div>
      
</body>
</html>