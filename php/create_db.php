<?php
// Llamar conexión
require("config_con1.php");

// Crear DB
$sql = "CREATE DATABASE psw_fase4";

// Verificar creación
if (mysqli_query($conn, $sql)){
    echo "Base de datos creada satisfactoriamente :)";
} else {
    echo "Error creando base de datos: " . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);
?>