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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <link rel="stylesheet" href="barra.css">
    <link rel="stylesheet" href="perfil.css">
</head>
<body>
    <nav>
    <div class="navigation">
        <ul>
            <li>
                <a href="perfil.php">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <span class="title">Perfil</span>
                </a>
            </li>
            <li>
                <a href="ponto.html">
                    <span class="icon"><i class="fa-solid fa-calendar-xmark"></i></span>
                    <span class="title">Ponto</span>
                </a>
            </li>
            <li>
                <a href="sobre.html">
                    <span class="icon"><i class="fa-solid fa-circle-question"></i></span>
                    <span class="title">Sobre</span>
                </a>
            </li> 
            <li>
                <a href="login.html">
                    <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                    <span class="title">Sair</span>
                </a>
            </li>
        </ul>
    </div> 
    </nav>
    <div class="box-degrade">
    <div class="page">
        <div class="card">
            <div class="w-100 box">
                <form class="box" id="form-form">
                    <!-- image -->
                    <div class="image-upload-box">
                       <br> <img id="image-preview" src="perfil-de-usuario.png" class="w-100 h-100"> </br.>
                        
                    </div>
                </form>
            </div>
        
    <br>
            <h1>Perfil Funcionário</h1>
            <h2>Nome: <?php echo $linha['nome']; ?> </h2>
            <h3>RM: <?php echo $linha['cod_matricula']; ?></h3>
            <h3>SETOR: <?php echo $linha['setor']; ?> </h3>
    
    
   </div>
</div>
</div>


  <div class="toggle" onclick="toggleMenu();"></div>
   <script type="text/javascript">
     function toggleMenu(){
         let navigation = document.querySelector('.navigation');
         let toggle = document.querySelector('.toggle');
         navigation.classList.toggle('active');
         toggle.classList.toggle('active');
     }
  </script>

</body>
</html>