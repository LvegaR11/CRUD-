<?php
include('conection.php');
$con = conection();

if (isset($_GET['idUsuario'])) {
    $idUsuario = $_GET['idUsuario'];
    // Preparar la consulta
    $stmt = $con->prepare("DELETE FROM usuarios WHERE idUsuario =?");
    // Bind de parámetros
    $stmt->bind_param("i", $idUsuario);
    // Ejecutar la consulta
    $stmt->execute();
    // Verificar si la consulta fue exitosa
    if ($stmt->affected_rows > 0) {
        header("location: index.php");
    } else {
        echo "Error deleting user: ". $stmt->error;
    }
} else {
    echo "No se ha proporcionado el ID de usuario";
}

// Cerrar la conexión
$stmt->close();
$con->close();
?>