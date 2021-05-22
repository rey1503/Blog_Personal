<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZANDO..</title>
</head>
<body>
<?php
 $idd=$_POST["id"];
$usu=$_POST["cambiouso"];
$con=$_POST["cambiopas"];
$host = "localhost";
$nombre="blogpe";
$usuario="root";
$contra="1503";
$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
$consulta="UPDATE login SET uso='$usu', pass='$con' WHERE id='$idd'";
$resultados=mysqli_query($conexion,$consulta);
if($resultados==false){
echo "algo salio mal :C";
}else{
    echo "SE ACTUALIZO CORRECTAMENTE <br>";
    echo "<form action='blog.php' method='POST'>";
    echo "<input type='submit' value='Regresar'>";
    echo "</form>";
    

}
?>
</body>
</html>