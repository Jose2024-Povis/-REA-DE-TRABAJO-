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

// Consulta para obtener todas las reservas
$sql = "SELECT * FROM reservas";
$result = $conn->query($sql);

if (!$result) {
    die("Error en la consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Ver Reservas</title>
    <link rel="stylesheet" href="admin.css?v=1.0">
</head>
<body>
    <header>
        <h1>Panel de Administrador</h1>
        <nav>
            <a href="cerrar_sesion.php" class="btn">Cerrar Sesión</a>
        </nav>
    </header>

    <section>
        <h2>Reservas</h2>

        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nombre del Cliente</th><th>Teléfono</th><th>Fecha</th><th>Hora</th><th>Número de Personas</th><th>Fecha de Creación</th><th>Acciones</th></tr>";

            // Mostrar cada reserva en una fila de la tabla
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["nombre_cliente"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["telefono"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["fecha"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["hora"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["numero_personas"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["created_at"]) . "</td>";
                echo "<td><a href='eliminar_reserva.php?id=" . htmlspecialchars($row["id"]) . "' onclick=\"return confirm('¿Estás seguro de que deseas eliminar esta reserva?');\">Eliminar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay reservas.</p>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </section>

    <footer>
        <p>© 2024 Trial Catering - Panel de Administración</p>
    </footer>
</body>
</html>
