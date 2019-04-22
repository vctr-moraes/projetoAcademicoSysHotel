<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script language="javascript" type="text/javascript" src="js/validacoes.js">
		function validarLogin();
	</script>
</head>

<body style="margin-left: 5%; margin-right: 5%; margin-top: 2%">
	<center><img src="imagens/logo.png"></center><br>
	<div class="row">
		<center>
			<a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;
			<a href="sobre.php">Sobre o Hotel</a>&nbsp;&nbsp;&nbsp;
			<a href="acomodacoes.php">Acomodações</a>&nbsp;&nbsp;&nbsp;
			<a href="localizacao.php">Localização</a>&nbsp;&nbsp;&nbsp;
			<a href="contato.php">Contato</a>&nbsp;&nbsp;&nbsp;
			<a href="login.php">Login</a>
		</center>
	</div>
	<br>

	<h1>Login</h1>
	<hr width="1200">
	<br>

	<?php
	//Exibe mensagem de erro, caso ocorra
	if (isset($_GET["erro"])) {
		$erro = $_GET["erro"];
		echo "<center><font color = 'red'>$erro</font></center>";
	}
	?>

	<form name="formLogin" action="autenticacao.php" method="post">
		CPF <br>
		<input type="text" name="Fcpf" maxlength="11"><br><br>
		Senha <br>
		<input type="password" name="Fsenha" maxlength="8"><br><br>
		<input type="reset" value="Limpar">
		<input type="submit" value="Entrar" onclick="return validarLogin()">
		<p>Não possui cadastro? Clique <a href="cadastrar.php">Aqui</a></p>
	</form>

</body>
<div class="footer">
	<hr width="1200">
	<center>
		<p>Golden Tulip :: Av. Nossa Sra. dos Navegantes - Enseada do Suá - Vitória - Espírito Santo <br> Telefone: (27) 3533-1300 - Email: atendimento@goldentulip.com</p>
	</center>
</div>

</html>