<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar SPG</title>
</head>
<body>
    <h1>Sistema Escolar</h1>
    <form action="validar.php" method="POST">
        <label for="matricula">Matricula: </label>
        <input type="number" name="matricula" required>
        <br>
        <label for="pswd">Contraseña: </label>
        <input type="text" name="pswd" required>
        <br>
        <button type="submit" name = "entrar">Ingresar</button>
    </form>
    <?php   
    //validating for Warning
    if(!empty($_GET["error"]) && $_GET["error"] == 100){
        echo "Usuario o Contraseña incorrectos";
    }
    ?>
</body>
</html>
<?php ?>
