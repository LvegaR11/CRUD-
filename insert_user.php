<?php
include('conection.php');

$con = conection();

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Edad = $_POST['Edad'];
$Fecha_nacimiento = $_POST['Fecha_nacimiento'];
$Telefono = $_POST['Telefono'];
$Contraseña = $_POST['Contraseña'];
$CorreoElectronico = $_POST['CorreoElectronico'];

$sql = "INSERT INTO usuarios (Nombre, Apellido, Edad, Fecha_nacimiento, Telefono, Contraseña, CorreoElectronico)
 VALUES ('$Nombre', '$Apellido', '$Edad', '$Fecha_nacimiento', '$Telefono', '$Contraseña', '$CorreoElectronico')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("location: index.php");
} 
?>