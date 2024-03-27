<?php
 //Conectar com o MySQL
$host = 'localhost';
$user = 'root';
$pass = '';
$pontoidbd = 'pontoidbd';
$link = mysqli_connect($host,$user,$pass,$pontoidbd) or die(mysqli_error());

if($link -> error) {
    die("falha ao conectar ao banco:" . $link->error);
}

?>