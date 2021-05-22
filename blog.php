<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
    <link rel="stylesheet" href="blog.css">
</head>
<body>
<?php
session_start();
$_SESSION['usU'];
if($_SESSION['usU']==FALSE){
if(isset($_POST["Ent"])){
try{
    $base=new PDO('mysql:host=localhost; dbname=blogpe','root','1503');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_SILENT);
    $base->exec("SET CHARACTER SET utf8");
    $sql="SELECT * FROM login WHERE uso=:loge AND pass= :pas";
    $resultado=$base->prepare($sql); 
    $login=htmlentities(addslashes($_POST["loge"]));
    $pasw=htmlentities(addslashes($_POST["pas"]));
    $resultado->bindValue(":loge", $login);
    $resultado->bindValue(":pas", $pasw);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){
        session_start();
        $_SESSION['usU']=$_POST["loge"];
        require "tempo.php";
       // header("location:indexx.php");
    }else{
        echo "<p id=err>Usuario y/o contraseña invalido</p>";
        //header("location:index.php");
    }
}catch(Exception $e){
        die ('Error: ' . $e->getMessage());
    }finally{                               
        $base=null;
    }
}
}

?>
<?php
if(!isset($_SESSION["usU"])){
    include("login.php");
}else{
    require "soloimage.php";
    echo "<link rel='stylesheet' href='entrada.css'>";
    echo  "<h1 id='Bie'>Bienvenido :" . ' ' . $_SESSION["usU"] . " </h1><img id='fotop' width='100' height='100' src='data:image/png;base64," . base64_encode($resultado) . "'>";
    echo "<h1 id='pub'>Publicaciones</h1>";
    require "comentarios.php";
    echo "<div id='ultimo'>";
    echo "<h1>ingresa un comentario</h1>";
    echo " <form action='carga.php' method='POST' enctype='multipart/form-data'>";
    echo "  <textarea name='comentarios' id='inserta' cols='30' rows='10'></textarea> <br>";
    echo "  <input type='file' name='miArchivo'  size='20'> <br>";
    echo "   <input type='submit' value='publicar'>";
    echo " </form>";
    echo " </div>";
}
?>
<?php
if($_SESSION["usU"]==true){
echo "<form action='cerrarsesion.php' method='POST'>";
echo "<input id='ultimo1'type='submit' name='ton' value='cerrar sesion'> <br>";
echo "<form action='cerrarsesion.php' method='POST' value='cerrar sesion'></form>";
}
?>
<?php
if($_SESSION["usU"]==true){
echo "<form action='actualizar.php' method='POST'>";
echo "<input id='ultimo2' type='submit' name='ton' value='actualizar perfil'> <br>";
echo "</form>";
}
?>

</body>

</html>