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
          <a class="navbar-brand" href="./index.html">LibrosBD <span class="nombreSpan">BackEnd</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="librosDB.php">LibrosDB</a>
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
            <h4>Ingresa el Libro de tu Elección</h4>

        <form action="./nuevo_libro.php" method="POST">


        <label class="label" for="nombre">Nombre:</label>
        <br><input class="nombre" type="text" id="nombre" name="nombre"><br>

        <label class="label" for="autor">Autor:</label>
        <br><input class="autor" type="text" id="autor" name="autor"><br>

        <label class="label" for="editorial">Editorial:</label>
        <br><input class="editorial" type="text" id="editorial" name="editorial"><br>

        <label class="label" for="anioPublicacion">Año de Publicación:</label>
        <br><input class="anioPublicacion" type="number" id="anioPublicacion" name="anioPublicacion"><br>

        <label class="label" for="precio">Precio:</label>
        <br><input class="precio" type="number" id="precio" name="precio"><br>

            <br><br>
            
            <button type="submit" class="boton">Ingresar</button>
        </form>
      </div>
      
</body>
</html>