<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Contato</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body style="margin-left: 5%; margin-right: 5%; margin-top: 2%">
	
	<?php require 'cabecalho.php'; ?>

	<h1>Contate-nos</h1>
	<hr width="1200">
	<br>
	<form>
		Nome <br>
		<input type="text" name="Fnome" size="100"> <br><br>
		Cidade de origem <br>
		<input type="text" name="Fcidade" size="100"> <br><br>
		País de origem <br>
		<input type="text" name="Fpais" size="100"> <br><br>
		Telefone <br>
		<input type="text" name="Ftelefone" size="100"> <br><br>
		E-mail <br>
		<input type="Email" name="Femail" size="100"> <br><br>
		Escreva sua mensagem <br>
		<textarea rows="4" cols="75" name="Fmensagem" form="usrform"></textarea><br><br>
		<input type="reset" name="" value="Limpar">
		<input type="submit" name="Enviar" value="Enviar">
	</form>
	<br><br><br>

</body>
<footer>
	<hr width="1200">
	<center>
		<p>Golden Tulip :: Av. Nossa Sra. dos Navegantes - Enseada do Suá - Vitória - Espírito Santo <br> Telefone: (27) 3533-1300 - Email: atendimento@goldentulip.com</p>
	</center>
</footer>

</html>