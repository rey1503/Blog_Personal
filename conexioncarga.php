<?php
$comenta=$_POST["comentarios"];
    if($comenta==""){
    echo "ingresa por lo menos algun comentario";
    header("location:blog.php");
}else{
    session_start();
        $a=$_SESSION["usU"];
    $comenta=$_POST["comentarios"];
       $hh = date('d-M-Y h:i:s A');
        mysqli_select_db($conexion,"blogpe") or die ("no se encuentra la base de datos");
        mysqli_get_charset($conexion, "utf8");
        $slq="INSERT INTO publicar VALUES ('$a','$comenta','$contenido','$hh')";
        $resultado=mysqli_query($conexion,$slq);
        if(mysqli_affected_rows($conexion)>0){
            header("location:blog.php");
        }else{
            echo "no cargo tu mamada";
        }
    }
?>