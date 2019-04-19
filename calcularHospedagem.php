<?php 
	$dtEntrada = $_POST['FDTentrada'];
	$dtSaida = $_POST['FDTsaida'];
	$acomodacao = $_POST['Facomodacao'];
	$valorFinal = 0;

	$time_inicial = strtotime($dtEntrada);
	$time_final = strtotime($dtSaida);

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

	echo "Número de dias: $dias<br>";
	echo "O valor final da hospedagem é: " . $valorFinal;
 ?>