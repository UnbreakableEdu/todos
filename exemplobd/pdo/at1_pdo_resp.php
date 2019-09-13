<?php
    $dbhost     = 'localhost';
    $dbuser     = 'aluno';
    $dbpassword = 'aluno';
    $dbname     = 'atv_prt_041_bd';

    $nome = $_POST['nomecompleto'];
    $email_usuario         = $_POST['email'];
    $numerousuario        = $_POST['numeroaluno'];
    $funcaoacademica      = $_POST['funcaoescolar'];
    $nomeescolaaluno   = $_POST['school-name'];
    $nometimealuno     = $_POST['team-name'];
    $team_name          = $_POST['team-name'];
    $nomeescola        = $_POST['school-name'];
    $estadoescola       = $_POST['school-state'];
    $cidadeescola        = $_POST['school-city'];

    try {
        //Efetua a conexão com BD
        $conx = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
        //Cria a Query SQL
        $member_insert = "INSERT INTO members(nome_membro, email, numero, funcao, escola, team.nome_equipe) VALUES ('$nome', '$email_usuario', '$numerousuario', '$funcaoacademica', '$nomeescolaaluno', '$nometimealuno')";
        $conx->exec($member_insert);
        $team_insert      = "INSERT INTO team(nome_equipe) VALUES ('$team_name')";
        $conx->exec($team_insert);
        $school_insert    = "INSERT INTO school(nome, estado, cidade) VALUES ('$nomeescola', '$estadoescola', '$cidadeescola')";
        $conx->exec($school_insert);
        //Executa a Query
        
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
        <title>
            Exercicio 1
        </title>
    </head>

    <body>
        <div id="answer-content">
            <div id="answer-content-title-box">
                <h1 id="answer-content-title">
                    Sucesso!
                </h1>

                <p class="answer-content-p-box">
                    <a href="at1_pdo_perg.php">
                        Inserir outros dados
                    </a>

                    <br>
                    <br>

                    <a href="at1_pdo.php">
                    Todos os dados inseridos
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>