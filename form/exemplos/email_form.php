<form name="form1" method="post" action="email.php">
<table>
<tr>
<td>Nome:</td>
<td>
<input class="form_campos" type="text" name="nome" size="34">
</td>
</tr>
<tr>
<td>Cidade</td>
<td>
<input class="form_campos" type="text" name="cidade" size=34>
</td>
</tr>
<tr>
<td>Estado:</td>
<td>
<input class="form_campos" type="text" name="estado" size="34">
</td>
</tr>
<tr>
<td>E-mail:</td>
<td>
<input class="form_campos" type="text" name="email" size="34">
</td>
</tr>
<tr>
<td>Assunto:</td>
<td>
<select class="form_campos" name="assunto">
<option class="form_campos" value="Opinião" selected>Opinião</option>
<option class="form_campos" value="Sugestão">Sugestão</option>
<option class="form_campos" value="Parceria">Parceria</option>
<option class="form_campos" value="Reclamação">Reclamação</option>
<option class="form_campos" value="Outros">Outros</option>
</select>
</td>
</tr>
<tr>
<td>Mensagem:</td>
<td>
<textarea class="form_campos" name="mensagem" cols="34" rows="4"></textarea>
</td>
</tr>
<tr>
<td colspan="2">
<br>
<div class="div_botao">
<input class="form_botao" type="submit" name="Enviar" value="Enviar Mensagem">
<input class="form_botao" type="reset" name="Limpar" value="Limpar">
</div>
</td>
</tr>
</table>
</form>

<?php
echo "<html>
<head>
<title> Processando... </title>
<link rel=\"stylesheet\" href=\"class.css\">
</head>";
echo "<body class=\"texto\">";
// Variaveis originadas no email_form.php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
// adicionei a captura do ip do remetente
$ip = $_SERVER['REMOTE_ADDR'];
//Seu email, para onde irao as informações do formulário
$mail_destino = "SEUEMAIL@PROVEDOR.COM";
//Mensagem de cabeçalho do email
$mail_header = "Mensagem do SITE.";
//Mensagem para o email de resposta
$msg_reply = "Olá $nome,\nRecebemos o seu email com o assunto $assunto.\n\nObrigado pelo seu contato!\n\n Esta é uma mensagem automática de confirmação.\n Por Favor não responda este e-mail.\n $ip";
//Mensagem de Erro
$msg_erro = "Atenção!! Os campos (Nome, E-mail e Mensagem ) não podem estar em branco.";
//Endereço do seu SMTP (para se conectar no SMTP) (acho que é só para windows afinal não tem postfix ou sendmail)
//$msg_smtp_url = "<p>smtp.prov.com.br</p>";
//Login do seu SMTP (para se conectar no SMTP)
//$msg_smtp_login = "";
//Senha do seu SMTP (para se conectar no SMTP)
//$msg_smtp_senha = "";
//Obrigatoriedade
if ($nome!="" and $assunto!="" and $email!="")
{
$msg.="$mail_header\n\n";
$msg.="Nome: $nome\n";
$msg.="Cidade: $cidade\n";
$msg.="Estado: $estado\n";
$msg.="Email: $email\n";
$msg.="Assunto: $assunto\n";
$msg.="Mensagem: $mensagem\n";
$msg.="ip da origem: $ip";

if (mail($mail_destino, "Formulário do SITE: $assunto", $msg, "From:$nome<$email>"))
{
//Imprimindo confirmação de envio
echo "olá! $nome,<br><br>sua mensagem:<br> $mensagem <br>Foi enviada com sucesso!<br><br>";
echo "Obrigado!<br>vc receberá um e-mail de confirmação desta mensagem<br><br>endereço ip: $ip";
//Enviando mensagem de confirmação para o email do internauta
mail("$nome<$email>", "Re:Formulário enviado: $assunto", $msg_reply, "From:<$mail_destino>");
}
else {
echo "<br><br>Erro ao enviar e-mail!";
}
}
else
{
//Alerta sobre os campos obrigatórios
echo
"<br><br>$msg_erro <br><br>
<a href=\"javascript:window.history.go(-1)\" class=\"home_links\">Por favor, volte e preencha corretamente.</a>";

}
echo "</body> </html>";
?>