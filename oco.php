<?php
 //Conectar com o MySQL
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $pontoidbd = 'pontoidbd';
 $link = mysqli_connect($host,$user,$pass,$pontoidbd) or die(mysqli_error());
 echo ("enviado com sucesso");
 mysqli_select_db  ($link,$pontoidbd )or die(mysqli_error($link));
 

    $cod_matricularm = $_POST ['cod_matricularm'];
    $tipo = $_POST ['tipo'];
    $data_inicio = $_POST ['data_inicio'];
    $data_fim = $_POST ['data_fim'];
    $data_entrega = $_POST ['data_entrega'];


    $sql = "INSERT INTO ocorrencias(cod_matricularm,tipo, data_inicio, data_fim, data_entrega)
                           VALUES ($cod_matricularm,'$tipo', '$data_inicio', '$data_fim', '$data_entrega')";
    $result = mysqli_query($link,$sql);
    echo $sql;
    header('Location:ocoresultado.php');

    ?>