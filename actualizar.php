<?php 
include('conection.php');
$con = conection();

$id = $_GET['idUsuario'];

$sql = "SELECT * FROM usuarios WHERE idUsuario= '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Editar usuario</title>
</head>

<body>
    <div>
        <form action="update_user.php" method="POST">
            <h1>EDITAR DATOS DE USUARIOS</h1>
            <input type="hidden" name="idUsuario" value="">
            <input type="text" name="nombre" placeholder="Ingresa el nombre" >
            <input type="text" name="apellido" placeholder="Ingresa el apellido" >
            <input type="text" name="edad" placeholder="Ingresa su edad">
            <input type="text" name="fecha_nacimiento" placeholder="fecha de nacimiento">
            <input type="text" name="telefono" placeholder="numero telefono">
            <input type="text" name="contraseña" placeholder="Crea una contraseña" >
            <input type="text" name="correoElectronico" placeholder="correoElectronico">
            
            
            <input type="submit" value="Actualizar datos">



        </form>
    </div>
    
</body>
</html>