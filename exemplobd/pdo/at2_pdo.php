<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 2</title>
    </head>

    <body>
        <h1>
            Todos os dados inseridos
        </h1>
   
        <?php
        $dbhost = 'localhost'; $dbuser = 'aluno'; $dbpassword = 'aluno'; $dbname = 'atv_prt_042_bd';
        try {
        
            //Efetua a conexão com BD
            $conx = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
            //Cria a Query SQL
            $query = "SELECT testeID, nome, idade FROM teste1 ORDER BY nome ASC";
            
            //Executa a Query
            $consulta = $conx->query($query);
            while($row = $consulta->fetch(PDO::FETCH_BOTH)) {

            $table[] = $row;
            }
        ?>

        <table>
        <tr>
        <td><strong>Código</strong></td>
        <td width="10">&nbsp;</td>
        <td><strong>Nome Completo</strong></td>
        <td width="10">&nbsp;</td>
        <td><strong>Idade</strong></td>
        <td width="10">&nbsp;</td>
        </tr>
        <?php
                if ($table) {
                    foreach ($table as $tabletotal) {
                        ?>

                        <tr>
                        <td>
                        <?php echo($tabletotal["testeID"]) ?>
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
                        <?php echo($tabletotal["idade"]) ?>
                        </td>
                        </tr>

                        <?php
                    }
                }
            ?>
            </table>

            <?php
                $number_regs = $consulta->rowCount();
            ?>
            <p>Número de Registros : <?php echo $number_regs; ?></p>

            <?php
            //Fecha a conexão
            $conx = null;
            } catch (PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
            }

            ?>
    </body>
</html>