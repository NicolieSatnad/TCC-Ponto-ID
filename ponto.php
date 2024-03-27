<?php
 //Conectar com o MySQL
$host = 'localhost';
$user = 'root';
$pass = '';
$pontoidbd = 'pontoidbd';
$link = mysqli_connect($host,$user,$pass,$pontoidbd) or die(mysqli_error());
echo ("enviado com sucesso");
mysqli_select_db  ($link,$pontoidbd )or die(mysqli_error($link));

$matricula = $_POST['matricula'];
$nome= $_POST ["nome"];


$sql = "INSERT INTO hora(matricula,nome) VALUES ('$matricula', '$nome')";
$result = mysqli_query($link, $sql);
header('Location:ponto.html');

?>