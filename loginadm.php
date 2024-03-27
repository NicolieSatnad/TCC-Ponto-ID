<?php
// Conectar com o MySQL
//$link = mysqli_connect("localhost", "root", "", "pontoidbd");
$mysqli = new mysqli("localhost", "root", "", "pontoidbd");

if(isset($_POST['cod_matricula']) == 0){
    echo "preencha seu RM";   
} else if(strlen($_POST['senha']) == 0){
    echo "preencha a sua senha";
} else {

    $cod_matricula = $mysqli->real_escape_string($_POST ['cod_matricula']);
    
    $senha = $mysqli->real_escape_string($_POST ['senha']);

    $sql_code = "SELECT * FROM funcionario WHERE cod_matricula = '$cod_matricula' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("falha na execução do codigo SQL:". $mysql->$mysqli->error);


    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){
        $user = $sql_query->Fetch_assoc();

        if(isset($_SESSION)) {
            session_start();
        }

        $_SESSION['cod_matricula'] = $user['cod_matricula'];
        $_SESSION['nome'] = $user['nome'];


       header("location: homeadm.html");

    } else {
        echo "Falha ao logar: RM ou Senha incorretos!";
    }
}
?>
