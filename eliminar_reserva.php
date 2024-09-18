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

// Obtener el ID de la reserva a eliminar
$id = $_GET['id'];

// Eliminar la reserva de la base de datos
$sql = "DELETE FROM reservas WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Reserva eliminada con éxito.";
} else {
    echo "Error al eliminar la reserva: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

// Redirigir de vuelta a la página de admin
header("Location: admin.php");
exit;
?>
