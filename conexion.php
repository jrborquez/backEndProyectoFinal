<?php
    $conexion = new mysqli(
        "localhost:3306",
        "root",
        "Arylvere1",
        "Libros"
    );

    if (mysqli_connect_errno()){
        printf("Falló la conexión");
    }else{
       /* printf("online"); */
    }
?>