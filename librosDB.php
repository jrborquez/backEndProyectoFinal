<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibrosBD</title>
    <link rel="stylesheet" href="estilos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
    
</head>

<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php">LibrosBD <span class="nombreSpan">BackEnd</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link  active" aria-current="page"  href="librosDB.php">LibrosDB</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ingresarLibros.php">Ingresar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="container mt-4 shadow-lg p-4 bg-body rounded">
        <table class="table">
            <thead class="table-warning">
                <tr >
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año de Publicación</th>
                    <th>Precio</th>
                    <th><i class="bi bi-pen"></i></th>
                    <th><i class="bi bi-trash"></i></th>
                </tr>
            </thead>
            <tbody>
              <?php
              include "conexion.php";
              
              $sentencia="SELECT * FROM libros;";
              $resultado= $conexion-> query($sentencia) or die (mysqli_error($conexion));
              $contar= mysqli_num_rows($resultado);
              $i=0;

              while($fila=$resultado->fetch_array()){
                
                echo "<tr>";
                    echo "<td>"; echo $fila['nombre']; "<td/>";
                    echo "<td>"; echo $fila['autor']; "<td/>";
                    echo "<td>"; echo $fila['editorial']; "<td/>";
                    echo "<td>"; echo $fila['anioPublicacion']; "<td/>";
                    echo "<td>"; echo $fila['precio']; "<td/>";
                    echo "<td><a href='modificarLibros.php?nombre=".$fila['nombre']."'><i class='bi bi-pen'></i></a></td>";
                    echo "<td><a href='eliminar_libro.php?nombre=".$fila['nombre']."'><i class='bi bi-trash'></i></a></td>";
                echo "<tr/>";
                $i++;

                if($i == $contar){
                  return;  /* cerrar el while loop, con un return dentro del loop */
                  };
              }
              
              mysqli_close($conexion);
              

              ?>
                 
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
</body>
</html>