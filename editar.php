<?php
include('conection.php');
$con = conection();

$idUsuario = $_POST['idUsuario'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$edad = $_POST['Edad'];
$fecha_nacimiento = $_POST['Fecha_nacimiento'];
$telefono = $_POST['Telefono'];
$contraseña = $_POST['Contraseña'];
$correoElectronico = $_POST['CorreoElectronico'];

$sql = "UPDATE usuarios SET 
            Nombre = '$nombre', 
            Apellido = '$apellido', 
            Edad = '$edad', 
            Fecha_nacimiento = '$fecha_nacimiento', 
            Telefono = '$telefono', 
            Contraseña = '$contraseña', 
            CorreoElectronico = '$correoElectronico' 
        WHERE idUsuario = '$idUsuario'";

$query = mysqli_query($con, $sql);

if ($query) {
    header("location: index.php");
} else {
    echo "Error al actualizar el usuario: " . mysqli_error($con);
}
?>