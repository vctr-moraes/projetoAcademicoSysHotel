<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cliente Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
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

	<a href="clienteAdmin.php"><h1 style="color: blue">Área do Cliente</h1></a>
	<hr width="1200">
	<br>
	<a href="reservar.php">Fazer Reserva</a>&nbsp;&nbsp;&nbsp;
	<a href="verReserva.php">Visualizar Reserva</a>&nbsp;&nbsp;&nbsp;
	<a href="editarUsuario.php">Minhas Informações</a>&nbsp;&nbsp;&nbsp;
	<a href="logout.php">Sair</a><br><br>

	<?php
		include_once("validar.php");
		include_once("saudacao.php");
		echo "<h3>Alterar Reserva</h3>";

		error_reporting(E_ALL ^ E_NOTICE);
		error_reporting(E_ALL);

		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$banco = 'hotel';

		$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
		$myquery = "select tipoPagamento, dataEntrada, dataSaida, acomodacao from mydb.reserva where fkCliente = " . $_SESSION["login"];
		$res = mysqli_query($conexao, $myquery) or die ("Erro ao pesquisar dados do cliente " . mysqli_error());

		while($registro = mysqli_fetch_assoc($res)){
			$tipoPagamento = $registro['tipoPagamento'];
			$dataEntrada = $registro['dataEntrada'];
			$dataSaida = $registro['dataSaida'];
			$acomodacao = $registro['acomodacao'];

		echo "
			<form name=\"formReserva\" action=\"salvarEdicaoReserva.php\" method=\"POST\">
				Acomodação <br>
				<select name=\"Facomodacao\">
					<option value=\"Apartamento\">Apartamento</option>
					<option value=\"Suite\">Suíte</option>
					<option value=\"Suite Cobertura\">Suíte Cobertura</option>
				</select><br><br>
				Entrada <br>
				<input type=\"date\" name=\"FDTentrada\" id=\"entrada\" size=\"110\" min=\"<?php print date('Y-m-d'); ?>\"> <br><br>
				Saída <br>
				<input type=\"date\" name=\"FDTsaida\" id=\"saida\" size=\"110\" min=\"<?php print date('Y-m-d', strtotime('+ 1 day')); ?>\"><br><br>
				Forma de Pagamento <br>
				<select name=\"FTPpgto\">
					<option value=\"Especie\">Espécie</option>
					<option value=\"Cheque\">Chuque</option>
					<option value=\"Cartao de Credito\">Cartão de Crédito</option>
				</select><br><br>
				<a href=\"editarUsuario.php\">Cancelar</a>&nbsp;&nbsp;&nbsp;
				<input type=\"submit\" name=\"Enviar\" value=\"Confirmar Alteração\" onclick=\"return validarReserva()\">
			</form>
		";
		}
	?>
	<br><br><br>

</body>
	<footer>
		<hr width="1200">
		<center>
			<p>Golden Tulip :: Av. Nossa Sra. dos Navegantes - Enseada do Suá - Vitória - Espírito Santo <br> Telefone: (27) 3533-1300 - Email: atendimento@goldentulip.com</p>
		</center>
	</footer>
</html>