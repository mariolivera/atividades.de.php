<html lang="pt-br">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>escola</title>
    </head>
    <body>
        <form action="post.php" method="POST">
            <label for="aluno">Aluno</label>
            <input type="text" id="aluno" type="text" placeholder="Nome do Aluno">

            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" type="text" placeholder="Nome da cidade">

            
            <label for="matricula">Matricula</label>
            <input type="text" id="matricula" type="number" placeholder="Numero da matricula">

            
            <input class="btn" type="submit">
            <?php error_reporting(0);
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
            if (isset($_POST['escola'])){
            $aluno = $_POST['aluno'];
            $cidade = $_POST['cidade'];
            $matricula = $_POST['matricula'];
            $query = mysqli_query($mysqli, "INSERT INTO escola(aluno, cidade, matricula) VALUES ('$aluno','$cidade','$matricula')");
            if ($query) {
                echo "Boneco Cadastro, Rita Ficou Feliz Na Lua";
            } else {
              echo "Os Power Ranger Derrotaram Seu Boneco Antes Dele Cadastrar, Tente De Novo";
            }
        }
            ?>
        </form>
    </body>