
<?php
 //Conectar com o MySQL
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $pontoidbd = 'pontoidbd';
 $link = mysqli_connect($host,$user,$pass,$pontoidbd) or die(mysqli_error());
 
 if(mysqli_errno($link)) {
  die("Erro ao conectar-se com o servidor! <b>ERRO:<b> " .
      mysqli_error($link));

 }

 $sql = "select * from ocorrencias";
 $resultado = mysqli_query($link, $sql);

 $num_linhas = mysqli_num_rows($resultado);

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
    <link rel="stylesheet" href="oco.css">
</head>
<body>
<nav>
    <div class="navigation">
        <ul>
        <li>
                <a href="oco.html">
                    <span class="icon"><i class="fa-solid fa-circle-exclamation"></i></span>
                    <span class="title">Envio de Ocorrências</span>
                </a>
            </li>
            <li>
                <a href="ocoresultado.php">
                    <span class="icon"><i class="fa-solid fa-circle-exclamation"></i></span>
                    <span class="title">Ocorrências</span>
                </a>
            </li>
            <li>
                <a href="sobreadm.html">
                    <span class="icon"><i class="fa-solid fa-circle-question"></i></span>
                    <span class="title">Sobre</span>
                </a>
            </li> 
            <li>
                <a href="loginADM.html">
                    <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                    <span class="title">Sair</span>
                </a>
            </li>
        </ul>
    </div> 
    </nav>

<div class="box-degrade">
  <div class="page">
  <form action="oco.php" method="POST" class="formOco">
<table border = '2'>

<h1> Ocorrencias Feitas - PontoID<h1>
    <tr>
      <th>Registro de Matricula </th>
      <th>Tipo de Ocorrencia</th>
      <th>Data de Inicio</th>
      <th>Data de Fim</th>
      <th>Data da Entrega do Documento </th>
      
    </tr>
    </form>
  </div>
</div>
<?php
if($num_linhas > 0){
   while($linha = mysqli_fetch_assoc($resultado)){
     $cod_matricularm = $linha["cod_matricularm"];
     echo "\n<tr>\n\t" . 
     "<td>" . $cod_matricularm . "</td>\n\t" .
     "<td>" . $linha["tipo"] . "</td>\n\t" .
     "<td>" . $linha["data_inicio"] . "</td>\n\t" .
     "<td>" . $linha["data_fim"] . "</td>\n\t" .
     "<td>" . $linha["data_entrega"] . "</td>\n\t" .
     "</tr>\n";
   }
} else {
  echo "<tr><td colspan=\"9\">Não existe ocorrencias cadastradas!</td></tr>\n\t";
}
?>

    </table><br>

    <a href="oco.html">
               <h3>Cadastre uma nova Ocorrência</h3>

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
    

