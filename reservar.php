<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cliente Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript" language="javascript">
		function confirmar() {
			alert("Reserva realizada com sucesso!");
		}
	</script>
</head>

<body style="margin-left: 5%; margin-right: 5%; margin-top: 2%">
	
	<?php require 'cabecalho.php'; ?>

	<a href="clienteAdmin.php">
		<h1 style="color: blue">Área do Cliente</h1>
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

	<h3>Preencha o formulário para realizar sua reserva</h3>

	<form name="formReserva" action="novaReserva.php" method="POST">
		Acomodação <br>
		<select name="Facomodacao">
			<option value="Apartamento">Apartamento</option>
			<option value="Suite">Suíte</option>
			<option value="Suite Cobertura">Suíte Cobertura</option>
		</select><br><br>
		Entrada <br>
		<input type="date" name="FDTentrada" id="entrada" size="110" min="<?php print date('Y-m-d'); ?>"> <br><br>
		Saída <br>
		<input type="date" name="FDTsaida" id="saida" size="110" min="<?php print date('Y-m-d', strtotime('+ 1 day')); ?>"><br><br>
		Forma de Pagamento <br>
		<select name="FTPpgto">
			<option value="Especie">Espécie</option>
			<option value="Cheque">Chuque</option>
			<option value="Cartao de Credito">Cartão de Crédito</option>
		</select><br><br>
		<input type="reset" name="" value="Limpar">
		<input type="submit" name="Enviar" value="Efetuar Reserva" onclick="return validarReserva()" , onclick="return confirmar()">
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