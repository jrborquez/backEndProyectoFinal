<?php

    ModificarLibro($_POST['nombre'], $_POST['autor'], $_POST['editorial'], $_POST['anioPublicacion'], $_POST['precio']);
    
    function ModificarLibro($nombre, $autor, $editorial, $anioPublicacion, $precio)
{
    include 'conexion.php';
    
    $sentencia = "UPDATE libros SET nombre='$nombre', autor='$autor', editorial='$editorial', anioPublicacion='$anioPublicacion', precio='$precio' WHERE nombre='$nombre';";
    $conexion->query($sentencia) or die ("Error en actualizar datos".mysqli_error($conexion));
}   

?>

<script type="text/javascript">
    alert("Datos Actualizados Exitosamente");
    parent.window.location.href="./librosDB.php";
</script>