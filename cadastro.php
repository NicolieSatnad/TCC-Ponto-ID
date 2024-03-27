<?php
 //Conectar com o MySQL
$host = 'localhost';
$user = 'root';
$pass = '';
$pontoidbd = 'pontoidbd';
$link = mysqli_connect($host,$user,$pass,$pontoidbd) or die(mysqli_error());
echo ("enviado com sucesso");
mysqli_select_db  ($link,$pontoidbd )or die(mysqli_error($link));

session_start();
$cod_matricula= $_POST ["cod_matricula"];
$nome= $_POST ["nome"];
$setor= $_POST ["setor"];
$senha= $_POST ["senha"]; 


if(isset($_POST['Cadastrar'])){
$sql = "INSERT INTO funcionario (cod_matricula,nome,setor,senha) VALUES ('$cod_matricula','$nome','$setor','$senha')";
$res = mysqli_query ($link, $sql)or die (mysqli_error($link));

if ($res){
    echo "dados inseridos";
    header("location: login.html");
}
}
?>