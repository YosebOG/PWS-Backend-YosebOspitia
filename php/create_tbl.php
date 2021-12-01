<?php
// llamar conexión
require("config_con2.php");

// Crear tbl
$sql = "CREATE TABLE tbl_productos (
    pCod INT(10) PRIMARY KEY, 
    pNom VARCHAR(30), 
    pTip VARCHAR(30), 
    pCant INT(5), 
    pClas VARCHAR(50), 
    pMarc VARCHAR(50), 
    pSer VARCHAR(50), 
    pMod VARCHAR(50), 
    pPrecio FLOAT(8,2))";

// Verificar creación
if (mysqli_query($conn, $sql)){
    echo 'Tabla "tbl_productos" creada satisfactoriamente'; 
} else {
    echo 'Error creando "tbl_productos": ' . mysqli_error($conn); 
}

// Cerrar conexión
mysqli_close($conn);
?>