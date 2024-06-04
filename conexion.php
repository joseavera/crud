<?php
$servidor = "localhost";
$usuario = "user";
$password = "password";
$base_datos = "db";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $base_datos);
//verificacion1
// Verificar conexión
/*if ($conn->connect_error) {
    die("Conexión fallida - ERROR de conexión: " . $conn->connect_error);
}
echo "Conexión OK";*/
?>
