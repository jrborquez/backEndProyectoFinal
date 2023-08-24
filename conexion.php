<?php
    $conexion = new mysqli(
        "localhost",
        "id20463551_jrborquez",
        "JoseRojo.1",
        "id20463551_libros"
    );

    if (mysqli_connect_errno()){
        printf("Falló la conexión");
    }else{
        //printf("online");
    }
?>