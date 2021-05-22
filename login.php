<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>

<body>
    <div id="cabecera">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input id="us" type="text" name="loge" placeholder="Usuario">
            <input id="pas" type="password" name="pas" placeholder="Contraseña">
            <input id="entra" type="submit" value="Entrar" name="Ent">
        </form>
        <form action="regis.php">
            <input id="regis" type="submit" value="Registrarse">
        </form>
    </div>
</body>

</html>