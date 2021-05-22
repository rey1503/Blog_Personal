<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="actualizar.css">
    <title>ACTUALIZAR</title>
</head>
<body>
<?php
 session_start();
 $a=$_SESSION["usU"];
$host = "localhost";
$nombre="blogpe";
$usuario="root";
$contra="1503";
$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
$consulta="SELECT * FROM login WHERE uso LIKE '$a'";
$resultados=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
    echo "<form action='actual.php' method='POST'";
    echo "<div id='ima'>";
    $contenido=$fila["foto"];
if($contenido==null){
    echo"<p id='mage'>no hay imagen para mostrar</p> <br>"; 
     }else{
         echo "<img id='mage' width='100' height='100' src='data:image/png;base64," . base64_encode($contenido) . "'> <br>";
        }
        echo "</div>";
        echo "<div id='caja'";
echo "Registro:<br><input id='idd' type='text' name='id' readonly value='" . $fila['id']. "'><br>";
echo "Usuario:<br><input id='idd1' type='text' name='cambiouso' value='" . $fila['uso']. "'><br>";
echo "Contraseña:<br><input id='idd1' type='text' name='cambiopas' value='" . $fila['pass']. "'><br>";
echo "</div>";
echo "<input type='submit' id='ac' value='actualizar'> <br>";
echo "</form>";
echo "<form action='perfil.php' method='POST' enctype='multipart/form-data'>";
echo "<input type='file' name='perfil' size='20'> <br>";
echo "<input type='submit' value='Actualizar foto de perfil'>"; 
echo "</form>";
}
echo "<form action='blog.php' method='POST'>";
    echo "<input type='submit' value='Regresar'>";
    echo "</form>";
?>
   
</body>
</html>