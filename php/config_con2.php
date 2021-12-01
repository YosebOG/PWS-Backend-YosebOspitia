<?php
// Declaración de variables
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "psw_fase4"

// Crear conexión
$conn = mysqli_connect($servername, $username, $password);

// Verificar conexión
if (!$conn){
    die("Conexión fallida: " . mysqli_connect_error());
}
?>