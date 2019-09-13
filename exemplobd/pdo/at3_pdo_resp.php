<?php
    $dbhost     = 'localhost';
    $dbuser     = 'aluno';
    $dbpassword = 'aluno';
    $dbname     = 'atv_prt_043_bd';

    $fabricante = $_POST['fabri'];
    $ano_fabr = $_POST['anofabricacao'];
    $quilo = $_POST['quilometragem'];

    try {
        //Efetua a conexão com BD
        $conx = new PDO("mysql:host=$dbhost;dbname=$dbname;", $dbuser, $dbpassword);
        //Cria a Query SQL
        $query = "INSERT INTO autos (fabricante, ano_fabricacao, quilometragem) VALUES ('$fabricante', '$ano_fabr','$quilo')";
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
        <title>Exercicio 3</title>
    </head>

    <body>
        <div class="main-content">
            <div class="main-content-title">
            <h1>Sucesso!<?php print $fabricante ?></h1>
            </div>

            <div class="link-buttons">
            <a href="at3_pdo_perg.php">Inserir novos dados</a>
            <a href="at3_pdo.php">Todos os Dados</a>
            </div>
        </div>
    </body>
</html>