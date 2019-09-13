<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 3</title>
    </head>

    <body>
        <h1>
            Todos os dados inseridos
        </h1>
   
        <?php
        $dbhost = 'localhost'; $dbuser = 'aluno'; $dbpassword = 'aluno'; $dbname = 'atv_prt_043_bd';
        try {
        
            //Efetua a conexão com BD
            $conx = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
            //Cria a Query SQL
            $query = "SELECT auto_id, fabricante, ano_fabricacao, quilometragem FROM autos ORDER BY fabricante ASC";
            
            //Executa a Query
            $consulta = $conx->query($query);
            while($row = $consulta->fetch(PDO::FETCH_BOTH)) {

            $table[] = $row;
            }
        ?>

        <table>
        <tr>
        <td><strong>ID do Automóvel</strong></td>
        <td width="10">&nbsp;</td>
        <td><strong>Fabricante</strong></td>
        <td width="10">&nbsp;</td>
        <td><strong>Ano de Fabricação</strong></td>
        <td width="10">&nbsp;</td>
        <td><strong>Quilometragem</strong></td>
        <td width="10">&nbsp;</td>
        </tr>

            <?php 
                if ($table) {
                    foreach ($table as $tabletotal) {
                        ?>

                        <tr>
                        <td>
                        <?php echo($tabletotal["auto_id"]) ?>
                        </td>
                                
                        <td width="22">
                        &nbsp;
                        </td>
                            
                        <td>
                        <?php echo($tabletotal["fabricante"]) ?>
                        </td>

                        <td width="22">
                        &nbsp;
                        </td>

                        <td>
                        <?php echo($tabletotal["ano_fabricacao"]) ?>
                        </td>

                        <td width="22">
                        &nbsp;
                        </td>

                        <td>
                        <?php echo($tabletotal["quilometragem"]) ?>
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