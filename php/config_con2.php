<?php
// Declaración de variables
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad30";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conn){
    die("Conexión fallida: " . mysqli_connect_error());
}
?>