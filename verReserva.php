<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cliente Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript" language="javascript">
		function fecharReserva() {
			alert("Sua reserva foi fechada");
		}

		function cancelarReserva() {
			alert("Sua reserva foi cancelada");
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

		error_reporting(E_ALL ^ E_NOTICE);
		error_reporting(E_ALL);

		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$banco = 'hotel';

		$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
		$myquery = "select data, dataEntrada, dataSaida, valorTotal, status, acomodacao
						from mydb.reserva where fkCliente = " . $_SESSION["login"];
		$res = mysqli_query($conexao, $myquery) or die("Erro ao buscar as informações " . mysqli_error());

		echo "<h3>Minha Reserva</h3>";
		echo "<table border=1>";
		echo "<tr>	
					<td>Data da reserva</td>
					<td>Data de checkin</td>
					<td>Data de chckout</td>
					<td>Valor total</td>
					<td>Status</td>
					<td>Acomodação</td>
				</tr>";

		while ($registro = mysqli_fetch_assoc($res)) {
			$dataReserva = $registro['data'];
			$dataEntrada = $registro['dataEntrada'];
			$dataSaida = $registro['dataSaida'];
			$valorTotal = $registro['valorTotal'];
			$status = $registro['status'];
			$acomodacao = $registro['acomodacao'];

			echo "<tr>
						<td>$dataReserva</td>
						<td>$dataEntrada</td>
						<td>$dataSaida</td>
						<td>$valorTotal</td>
						<td>$status</td>
						<td>$acomodacao</td>
					</tr>";
		}
		echo "</table>";
	?>

	<br><br>
	<div class="row">
		<a href="deletarReserva.php"><button type="button" style="background-color: red" onclick="return cancelarReserva()">Cancelar Reserva</button> </a>
		<a href="alterarReserva.php"><button type="button" style="background-color: grey">Modificar Reserva</button> </a>
		<a href="fecharReserva.php"><button type="button" style="background-color: green" onclick="return fecharReserva()">Fechar Reserva</button> </a>
	</div>
	<br><br><br>

</body>
<div class="footer">
	<hr width="1200">
	<center>
		<p>Golden Tulip :: Av. Nossa Sra. dos Navegantes - Enseada do Suá - Vitória - Espírito Santo <br> Telefone: (27) 3533-1300 - Email: atendimento@goldentulip.com</p>
	</center>
</div>

</html>