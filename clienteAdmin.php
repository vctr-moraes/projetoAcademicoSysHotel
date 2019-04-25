<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cliente Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body style="margin-left: 5%; margin-right: 5%; margin-top: 2%">
	
	<?php require 'cabecalho.php'; ?>

	<a href="clienteAdmin.php">
		<h1 style="color: blue" class="clienteAdmin">Área do Cliente</h1>
	</a>
	<hr width="1200">
	<br>
	<a href="reservar.php">Fazer Reserva</a>&nbsp;&nbsp;&nbsp;
	<a href="verReserva.php">Visualizar Reserva</a>&nbsp;&nbsp;&nbsp;
	<a href="editarUsuario.php">Minhas Informações</a>&nbsp;&nbsp;&nbsp;
	<a href="logout.php">Sair</a><br><br>

	<?php
		include_once("validar.php");
		include_once("saudacao.php");
	?>

</body>
<div class="footer">
	<hr width="1200">
	<center>
		<p>Golden Tulip :: Av. Nossa Sra. dos Navegantes - Enseada do Suá - Vitória - Espírito Santo <br> Telefone: (27) 3533-1300 - Email: atendimento@goldentulip.com</p>
	</center>
</div>

</html>