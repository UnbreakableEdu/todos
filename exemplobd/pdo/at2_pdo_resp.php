<?php
    $dbhost     = 'localhost';
    $dbuser     = 'aluno';
    $dbpassword = 'aluno';
    $dbname     = 'atv_prt_042_bd';

    $nome_comp = $_POST['nomecompleto'];
    $idade = $_POST['idade'];

    try {
        //Efetua a conexão com BD
        $conx = new PDO("mysql:host=$dbhost;dbname=$dbname;", $dbuser, $dbpassword);
        //Cria a Query SQL
        $query = "INSERT INTO teste1(nome, idade) VALUES ('$nome_comp', '$idade')";
        //Executa a Query
        $conx->exec($query);
        echo 'Registro inserido com sucesso';
        //Fecha a conexão
        $conx = null;
        } catch (PDOException $e) {
        echo "Conexão falhou: " . $e->getMessage();
        } 
    ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 2</title>
    </head>

    <body>
        <div class="main-content">
            <div class="main-content-title">
            <h1>Sucesso!<?php print $nome_comp ?></h1>
            </div>

            <div class="link-buttons">
            <a href="at2_pdo_perg.php">Inserir novos dados</a>
            <a href="at2_pdo.php">Todos os Dados</a>
            </div>
        </div>
    </body>
</html>