<?php
session_start();
 //Conectar com o MySQL
$host = 'localhost';
$user = 'root';
$pass = '';
$pontoidbd = 'pontoidbd';
$link = mysqli_connect($host,$user,$pass,$pontoidbd) or die(mysqli_error());

$sql = "SELECT*FROM ocorrencias WHERE cod_matricularm = $cod_matricularm";
?>

<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Ocorrencias Feitas</title> 
    </head> 
    <body> 
      <table border="1"> 
        <tr> 
          <td>Código</td> 
          <td>Tipo</td> 
          <td>Data de Inicio</td> 
          <td>Data do Fim </td> 
          <td>Data da Entrega do Documento</td> 
        </tr> 
        <?php while($dado = $link->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['cod_matricularm']; ?></td>
          <td><?php echo $dado['tipo']; ?></td> 
          <td><?php echo $dado['data_inicio']; ?></td> 
          <td><?php echo $dado['data_fim']; ?></td> 
          <td><?php echo $dado['data_entrega_doc']; ?></td> 
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
    </body> 
</html>




"SELECT * FROM usuario"; $con = $mysqli->query($consulta) or die($mysqli->error); 
?> 



$result = mysqli_query($link,$sql);

$linha = mysqli_fetch_assoc($result);
?>

<h1>Ocorrencias Feitas</h1>
<table>
    <tr>
        <th scope="col">RM</th>
        <th scope="col">Tipo</th>
        <th scope="col">Data de Inicio</th>
        <th scope="col">Data do Final</th>
        <th scope="col">Data da Entrega do Documento</th>
    </tr>
    <?php
      try{
        $sql = $link->prepare("select * from Ocorrencias");
        $sql->execute();
    while($linha = $sql->fetch(PDO::FETCH_ASSOC)){

        ?>

        <tr>
            <td class="l"><?php echo $linha['cod_matricularm']?></td>
            <td class="l"><?php echo $linha['tipo']?></td>
            <td class="l"><?php echo $linha['data_inicio']?></td>
            <td class="l"><?php echo $linha['data_fim']?></td>
            <td class="l"><?php echo $linha['data_entrega_doc']?></td>
        </tr>


        <?php
    }  
    }

        catch(PDOException $erro){
            echo $erro->getMessage();
        }

        if ($result){
            echo "dados inseridos";
            header("location: ocoresultado.html");
        }
        }

            
             
      <a href="usu_editar.php?codigo=<?php echo $dado['usu_codigo']; ?>">Editar</a> 
            <a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>">Excluir</a> 