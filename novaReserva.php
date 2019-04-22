<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(E_ALL);
	session_start();
	
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'hotel';

	$dataEntrada = $_POST['FDTentrada'];
	$dataSaida = $_POST['FDTsaida'];
	$valorTotal = $_POST[''];
	$tpPgto = $_POST['FTPpgto'];
	$status = "Reservado";
	$dataAtual = date('Y-m-d');
	$fkCliente = $_SESSION["login"];
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
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Erro ao conectar" . mysqli_error());
	$myquery = "insert into mydb.reserva(data, tipoPagamento, dataEntrada, dataSaida, valorTotal, status, acomodacao, fkCliente)
		values('$dataAtual', '$tpPgto', '$dataEntrada', '$dataSaida', '$valorFinal', '$status', '$acomodacao', '$fkCliente')";

	if(mysqli_query($conexao, $myquery)){
		echo "<center>Reserva realizada com sucesso!</center>";
	}else{
		echo "ERRO! " . mysqli_error($conexao);
	}
	mysqli_close($conexao);
	header("Location:clienteAdmin.php");
