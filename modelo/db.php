
<?php
// Datos de la conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_php";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

