<?php
function conectarBaseDatos() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_proyectobdm";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    return $conn;
}
?>
