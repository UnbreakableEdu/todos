<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Exercício 1
        </title>
    </head>

    <body>
        <div id="main-content">
            <div id="main-content-title">
                <h1>
                    Todos os Dados inseridos
                </h1>
            </div>

                    <?php
                        $dbhost            = 'localhost';
                        $dbuser            = 'aluno';
                        $dbpassword        = 'aluno';
                        $dbname            = 'atv_prt_041_bd';
                        try {
        
                            //Efetua a conexão com BD
                            $conx = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
                            //Cria a Query SQL
                            $query = "SELECT nome_membro, email, nome, cidade, estado, funcao, team.nome_equipe FROM members, school, team WHERE school.nome = members.escola AND members.nome_equipe = team.nome_equipe";
                            
                            //Executa a Query
                            $consulta = $conx->query($query);
                            while($row = $consulta->fetch(PDO::FETCH_BOTH)) {

                            $table[] = $row;
                            }
                    ?>

                        <table>
                        <tr>
                        <td><strong>Membro</strong></td>
                        <td width="10">&nbsp;</td>
                        <td><strong>E-mail</strong></td>
                        <td width="10">&nbsp;</td>
                        <td><strong>Escola</strong></td>
                        <td width="10">&nbsp;</td>
                        <td><strong>Estado</strong></td>
                        <td width="10">&nbsp;</td>
                        <td><strong>Cidade</strong></td>
                        <td width="10">&nbsp;</td>
                        <td><strong>Função</strong></td>
                        <td width="10">&nbsp;</td>
                        <td><strong>Nome da equipe</strong></td>
                        <td width="10">&nbsp;</td>
                        </tr>
                                <?php 
                                if ($table) {
                                    foreach ($table as $tabletotal) {
                                ?>

                                <tr>
                                <td>
                                <?php echo($tabletotal["nome_membro"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($tabletotal["email"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($tabletotal["nome"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($tabletotal["estado"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($tabletotal["cidade"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($tabletotal["funcao"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($tabletotal["nome_equipe"]) ?>
                                </td>
                                </tr>

                                <?php
                        }
                    }
                ?>
                </table>

                <div id="registry-box">
                <a href="at1_pdo_perg.php">
                    Inserir mais dados
                </a>
                </div>

                <?php
            //Fecha a conexão
            $conx = null;
            } catch (PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
            }

            ?>
        </div>
    </body>
</html>