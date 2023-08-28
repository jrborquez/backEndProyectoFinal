<?php

    NuevoLibro($_POST['nombre'], $_POST['autor'], $_POST['editorial'], $_POST['anioPublicacion'], $_POST['precio']);

    function NuevoLibro($nombre, $autor, $editorial, $anioPublicacion, $precio)
    {
        include 'conexion.php';

        $sentencia= "INSERT INTO libros (nombre, autor, editorial, anioPublicacion, precio) VALUES ('$nombre', '$autor', '$editorial', '$anioPublicacion', '$precio')";
        $conexion-> query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));

        mysqli_close($conexion);
    }
?>

<script type="text/javascript">
    alert("Producto Ingresado Exitosamente");
    parent.window.location.href="./librosDB.php";
</script>
