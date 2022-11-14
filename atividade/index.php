<?php
$host = "localhost";
$user = "root";
$password = "APOcalipisi@66";
$data_base = "atividade";
$mysqli = new mysqli($host, $user, $password, $data_base);

//confirmar que estar conectado com o banco de dados do mysql.
if($mysqli) {
    echo "Conexão Com o Banco de Dados: OK";
} else {
    echo "Conexão Com o Banco de Dados: OFF";
    die(mysqli_Error($mysqli));
}

$leitura = "SELECT * FROM escola";
$retorno = $mysqli->query($leitura);
?>

<html lang="pt-br">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>escola</title>
    </head>
    <body>
       <table border= "1px">
        <tr>
            <td>Id</td>
            <td>Aluno</td>
            <td>Cidade</td>
            <td>Matricula</td>
        </tr>
        <?php 
        foreach($retorno as $dado){
            echo "<tr>
            <td>{$dado ['id']}</td>
            <td>{$dado ['aluno']}</td>
            <td>{$dado ['cidade']}</td>
            <td>{$dado ['matricula']}</td>
        </tr>";
         } 
        ?>
       </table> 
    </body>
</html>