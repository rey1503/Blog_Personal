<?php
 session_start();
 $a=$_SESSION["usU"];
$host = "localhost";
$nombre="blogpe";
$usuario="root";
$contra="1503";
$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
$consulta="SELECT foto FROM login WHERE uso LIKE '$a'";
$resultados=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
    $resultado=$fila["foto"];
}
?>
