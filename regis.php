<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regis.css">
    <title>Bienvenido Registrate</title>
</head>

<body>
    <?php
    if (isset($_POST["en"])) {
        $id = ["0"];
        $usu = $_POST["sario"];
        $con = $_POST["coca"];
        $conca = $_POST["cocau"];
        if($usu== " " || $con==0 || $con==" "){
            echo "<p id=com>COMPLETA LOS CAMPOS USUARIO, CONTRASEÑA CON DATOS CORRECTOS</p>";
        }else{
        $host = "localhost";
        $nombre = "blogpe";
        $usuario = "root";
        $contra = "1503";
        $conexion = mysqli_connect($host, $usuario, $contra, $nombre);
            if ($con === $conca) {
                $consulta = "INSERT INTO login (`id`, `uso`, `pass`)  VALUES ('$id','$usu','$con')";
                $resultados = mysqli_query($conexion, $consulta);
                if ($resultados == false) {
                    echo "<p id=com>COMPLETA LOS CAMPOS USUARIO, CONTRASEÑA Y CONFIRMA</p>";
                } else {
                    echo  "<p id=com5>Registrado con exito</p>";
                }
            } else {

                echo  "<p id=com1>las contraseñas no coinciden intentalo de nuevo</p>";
            }
        }
    }

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" id="us" placeholder="Usuario" name="sario" required> <br>
        <input type="password" id="pas" placeholder="Contraseña" name="coca"required><br>
        <input type="password" id="pas1" placeholder="Repetir contraseña" name="cocau" required><br>
        <input type="submit" id="entra" name="en" value="Enviar">
    </form>
    <form action="blog.php" method="POST">
        <input id="re" type="submit" value="Regresar">
    </form>
</body>

</html>