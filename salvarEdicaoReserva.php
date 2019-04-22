<?php
	include_once("validar.php");
	include_once("saudacao.php");
	
	echo "<h3>Atualizar Dados</h3>";
	
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(E_ALL);

	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'hotel';

	$tipoPagamento = $_POST['FTPpgto'];
	$dataEntrada = $_POST['FDTentrada'];
	$dataSaida = $_POST['FDTsaida'];
	$acomodacao = $_POST['Facomodacao'];
	$valorFinal = 0;

	$time_inicial = strtotime($dataEntrada);
	$time_final = strtotime($dataSaida);

	$diferença = $time_final - $time_inicial;
	$dias = (int)floor($diferença / (60 * 60 * 24));

	switch ($acomodacao) {
		case "Apartamento":
			$valorFinal = $dias * 200;
			break;

		case "Suite":
			$valorFinal = $dias * 360;
			break;

		case "Suite Cobertura":
			$valorFinal = $dias * 420;
			break;

		default:
			echo "Por favor, informe as datas de entrada e saída.";
			break;
	}

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
	$myquery = "update mydb.reserva set tipoPagamento = '$tipoPagamento', dataEntrada = '$dataEntrada', dataSaida = '$dataSaida', valorTotal = '$valorFinal', acomodacao = '$acomodacao' where fkCliente = " . $_SESSION["login"];
	$res = mysqli_query($conexao, $myquery) or die ("Erro ao pesquisar dados do cliente " . mysqli_error());

	mysqli_close();
	header("Location: verReserva.php");
