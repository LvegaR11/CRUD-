<?php
include('conection.php');

$con = conection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>RED SOCIAL</title>
</head>

<body>
    <div>
        <form action="insert_user.php" method="POST">
            <h1>CREAR USUARIOS</h1>

            <input type="text" name="Nombre" placeholder="Ingresa el nombre">
            <input type="text" name="Apellido" placeholder="Ingresa el apellido">
            <input type="text" name="Edad" placeholder="Ingresa su edad">
            <input type="text" name="Fecha_nacimiento" placeholder="fecha de nacimiento">
            <input type="text" name="Telefono" placeholder="numero telefono">
            <input type="text" name="Contraseña" placeholder="Crea una contraseña">
            <input type="text" name="CorreoElectronico" placeholder="correoElectronico">
            
            
            <input type="submit" value="Agregar usuario">

        </form>
    </div>

    <div>
        <h2>USUARIOS REGISTRADOS</h2>
        <table>
            <thead>
                <tr>
                    <th>idUsuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th> 
                    <th>Fecha_nacimiento</th>
                    <th>Telefono</th>
                    <th>Contraseña</th>
                    <th>CorreoElectronico</th> 
                    
                    <th></th>
                    <th></th>
                </tr>

            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_array($query)):  ?>
                <tr>
                    <th><?= $row['idUsuario'] ?></th>
                    <th><?= $row['nombre'] ?></th>
                    <th><?= $row['apellido'] ?></th>
                    <th><?= $row['edad'] ?></th>
                    <th><?= $row['fecha_nacimiento'] ?></th>
                    <th><?= $row['telefono'] ?></th>
                    <th><?= $row['contraseña'] ?></th>
                    <th><?= $row['correoElectronico'] ?></th>
                    
                    <th><a href="actualizar.php?idUsuario=<?= $row['idUsuario'] ?>" class="usuario-style--edit">Editar </a></th>
                    <th><a href="eliminar.php?idUsuario=<?= $row['idUsuario'] ?>" class="usuario-style--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>