<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "contactos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$correo_electronico = $_POST['correo_electronico'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, correo_electronico, asunto, mensaje)
VALUES ('$nombre', '$correo_electronico', '$asunto', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Gracias por contactarnos. Su mensaje ha sido enviado.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
