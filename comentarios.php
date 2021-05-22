<?php
            $host = "localhost";
            $nombre = "blogpe";
            $usuario = "root";
            $contra = "1503";
            $conexion = mysqli_connect($host, $usuario, $contra, $nombre);
            $consulta = "SELECT * FROM publicar ORDER BY hora DESC";
            $resultados = mysqli_query($conexion, $consulta);
            while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
                echo "<div id='resul'>";
                echo "<p>".$fila['usuario'] . " " ."dice: </p>";
                echo "<p>" . $fila['comentario'] . "</p>";
                $contenido=$fila["fotoblog"];
                if($contenido==null){
               echo"<p>no hay imagen para mostrar </p>"; 
                }else{
                    echo "<p><img width='100' height='100' src='data:image/png;base64," . base64_encode($contenido) . "'> </p>";
            }
                echo "<p>" . $fila['hora'] . "</p>";
                echo "</div>";
               
            }
            ?>