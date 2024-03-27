<?php
// Conectar com o MySQL
include('conexao.php');
session_start();

if(empty($_POST['cod_matricula']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit;
}
$cod_matricula = mysqli_real_escape_string($link, $_POST['cod_matricula']);
$senha = mysqli_real_escape_string($link, $_POST['senha']);

$query = "select cod_matricula from funcionario where cod_matricula = '{$cod_matricula}' and senha = '{$senha}'";

$result = mysqli_query($link, $query);

$row = mysqli_num_rows($result);  
  
    if($row == 1) {
        $_SESSION['cod_matricula'] = $cod_matricula;
   //     header('Location: home.html');
   header('Location: perfil.php');
        exit();
    }   else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: login.html');
        exit();
    } 
?>
