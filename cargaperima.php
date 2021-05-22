<?php
    session_start();
        $a=$_SESSION["usU"];
        mysqli_select_db($conexion,"blogpe") or die ("no se encuentra la base de datos");
        mysqli_get_charset($conexion, "utf8");
        $slq="UPDATE login SET foto='$contenido' WHERE uso='$a'";
        $resultado=mysqli_query($conexion,$slq);
        if(mysqli_affected_rows($conexion)>0){
            header("location:blog.php");
        }else{
            echo "no cargo tu mamada";
        }
?>