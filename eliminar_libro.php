<?php
EliminarLibro($_GET["nombre"]);

function EliminarLibro($nombre){

    include 'conexion.php';
    $sentencia="DELETE FROM libros WHERE nombre='$nombre';";
    $conexion->query($sentencia) or die ("Error al eliminar Libro".mysqli_error($conexion));

}

?>

<script type="text/javascript">
    alert("Libro Eliminado");
    parent.window.location.href="./librosDB.php";
</script> 

