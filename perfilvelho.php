<?php
session_start();
 //Conectar com o MySQL
$host = 'localhost';
$user = 'root';
$pass = '';
$pontoidbd = 'pontoidbd';
$link = mysqli_connect($host,$user,$pass,$pontoidbd) or die(mysqli_error());



$cod_matricula=$_SESSION['cod_matricula'];


$sql = "SELECT*FROM funcionario WHERE cod_matricula = $cod_matricula";
$result = mysqli_query($link,$sql);

$linha = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <link rel="stylesheet" href="barra.css">
    <link rel="stylesheet" href="perfil.css">
    <script src="js.js" defer></script>
</head>
<body>
<div class="page">
    <div class="card">
        <div class="w-100 box">
        <form class="box" id="form-form">
                <div class="image-upload-box">
                    <img id="image-preview" src="" class="w-100 h-100">
                    
                </div>
            </form>
        </div>

        <h1>Perfil Funcionário</h1>
       <p> <?php echo $linha['nome']; ?> </p>
       <p> <?php echo $linha['cod_matricula']; ?> </p> 
       <p> <?php echo $linha['setor']; ?> </p>

    </div>
</div>  
    
</body>
</html>