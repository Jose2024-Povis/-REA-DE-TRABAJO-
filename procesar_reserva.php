<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Sin contraseña
$dbname = "rol";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$personas = $_POST['personas'];

// Insertar los datos en la tabla `reservas`
$sql = "INSERT INTO reservas (nombre_cliente, telefono, fecha, hora, numero_personas, created_at)
VALUES ('$nombre', '$telefono', '$fecha', '$hora', '$personas', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "<p>Reserva realizada con éxito.</p>";
    echo "<a href='index.html'><button>Volver al Inicio</button></a>"; // Botón para volver al inicio
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
