<?php
session_start();
if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 60 * 60 * 2) {
    session_destroy();
    header("Location: blog.php");
    die();  
}
$_SESSION['tiempo']=time();
?>