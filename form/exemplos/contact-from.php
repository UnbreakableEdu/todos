<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Formulário de Contato</title>

    </head>
        <body>

            <h2>Entre em Contato</h2>
            <p>Selecione seu carro</p>

            <form action="process-form.php" method="post">

            <label>Prioridade
                <span class="small">Tipo</span>
            </label>
            <select name="prioridade" size="1">
            <option value="Baixa">Baixa</option>
            <option value="Normal">Normal</option>
            <option value="Alta">Alta</option>
            <option value="Emergencia">Emergência</option>
            </select>

            <!--
            <p>     

                <label for="inputName">Nome:<sup>*</sup></label>
                <input type="text" name="nome" id="inputName">

            </p>
            <p>

                <label for="inputEmail">Email:<sup>*</sup></label>
                <input type="text" name="email" id="inputEmail">

            </p>

            <p>
                <label for="inputSubject">Assunto:</label>
                <input type="text" name="assunto" id="inputSubject">

            </p>
            <p>
                <label for="inputComment">Mensagem:<sup>*</sup></label>
                <textarea name="mensagem" id="inputComment" rows="5” cols="30"></textarea>
            </p>
            -->
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </form>
        </body>
</html>