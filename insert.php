<?php
//POST
include 'declarations.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    // Verificar la conexión
    if ($conexion->connect_error) {
        die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
    }

    // Insertar usuario en la base de datos
    $sql = "INSERT INTO usuarios (nombre, apellidos) VALUES ('$nombre', '$apellidos')";
    if ($conexion->query($sql) === TRUE) {
        
        header("Location: http://localhost/TiendaOnline");
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $conexion->close();
}
?>