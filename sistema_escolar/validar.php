<?php
    include ("./inc/config.php");
    $expediente = $_POST["matricula"];
    $contrasenia = $_POST["pswd"];

    if(!empty($expediente || $contrasenia)){
            $query = "SELECT * FROM alumno WHERE Expediente = $expediente AND Contra = "  . "MD5(" . "'" . $contrasenia . "'" . ");";
    $connection = mysqli_connect($HOST, $USER, $PSWD, $NAMEBD) or die("No se pudo Conectar");
    $resultado = mysqli_query($connection, $query) or die("No se pudo Conectar");

    if($resultado ->num_rows == 1 ){
        session_start();
        $_SESSION["validada"] = 1;
        header("Location:menu.php");
    }else{
        header("Location:index.php?error=100");
    }
    mysqli_close($connection);
    }else{
        header("Location:index.php?error=200");
    }