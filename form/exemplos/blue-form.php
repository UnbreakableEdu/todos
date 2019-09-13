<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Formulário de Contato Demo</title>

<style>
body{
font-family:"Lucida Grande";
font-size:12px;
}
p, h1, form, button {
border:0;
margin:0;
padding:0;
}
.spacer {
clear:both;
height:1px;
}

/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}
/* ----------- basic ----------- */
#basic{
border:solid 2px #DEDEDE;
}
#basic h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#basic p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #dedede;
padding-bottom:10px;
}

#basic label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#basic .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#basic input{
float:left;
width:200px;
margin:2px 0 30px 10px;}

#basic button{
clear:both;
margin-left:150px;
background:#888888;
color:#FFFFFF;
border:solid 1px #666666;
font-size:11px;
font-weight:bold;
padding:4px 6px;
}
/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;

}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}

#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:160px;
width:125px;
height:31px;
background:#444;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
            </head>
                        <body>
                            <div id="stylized" class="myform">
                                <form id="form1" id="form1" action="mail.php" method="POST">
                                    <label>Nome<span class="small">Inclua seu Nome</span>
                                    </label>
                                    <input type="text" name="nome">
                                    <label>Email<span class="small">Entre um Email Válido</span>
                                    </label>
                                    <input type="text" name="email">
                                    <label>Telefone<span class="small">Inclua o Número do Telefone</span>
                                    </label>
<input type="text" name="telefone">
<br />
<br />
<label>Website
<span class="small">Seu Website</span>
</label>
<input type="text" name="website">
<label>Prioridade
<span class="small">Nível de Prioridade</span>
</label>
<select name="prioridade" size="1">
<option value="Baixa">Baixa</option>
<option value="Normal">Normal</option>
<option value="Alta">Alta</option>
<option value="Emergencia">Emergência</option>
</select>
<br />
<br />

<br />
<label>Tipo
<span class="small">Tipo do Contato</span>
</label>
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Mudança Informação</option>
<option value="addition">Inclusão Informação</option>
<option value="new">Novos Produtos</option>
</select>
<br />
<br />
<br />
<label>Mensagem
<span class="small">Digite Sua Mensagem</span>
</label>
<textarea name="mensagem" rows="6" cols="25"></textarea><br />
<button type="submit" value="Enviar" style="margin-top:15px;">Enviar</button>
<div class="spacer"></div>
</form>
</div> <!-- end of form class -->
</body>
</html>