<?php
session_start();
print_r($_SESSION);
$sesion = $_SESSION["login exitoso"];
if($sesion != 1 ){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Menu</h1>
    <ul>
        <li>materias</li>
        <li>cursos</li>
        <li>kardex</li>
        <li>calificaciones</li>
        <li>idiomas</li>
        <li>adeudos</li>
    </ul>
    <a href="logout.php">Cierra Sesion</a>
</body>
</html>