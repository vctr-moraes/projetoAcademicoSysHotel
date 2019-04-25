<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script language="javascript" type="text/javascript" src="js/validacoes.js">
		function validar();
	</script>
</head>

<body style="margin-left: 5%; margin-right: 5%; margin-top: 2%">

	<?php require 'cabecalho.php'; ?>

	<h1>Cadastro</h1>
	<hr width="1200">
	<br>
	<form name="formCadastro" action="usuario.php" method="post">
		Nome <br>
		<input type="text" name="Fnome" size="110" maxlength="45"> <br><br>
		CPF <br>
		<input type="text" name="Fcpf" size="110" maxlength="11"> <br><br>
		Endereço <br>
		<input type="text" name="Fendereco" size="110"> <br><br>
		Telefone <br>
		<input type="text" name="Ftelefone" size="110"> <br><br>
		E-mail <br>
		<input type="Email" name="Femail" size="110"> <br><br>
		Senha <br>
		<input type="password" name="Fpassword" size="110" maxlength="8" placeholder="Somente números"><br><br>
		<input type="reset" name="" value="Limpar">
		<input type="submit" name="Enviar" value="Cadastrar" onclick="return validar()">
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