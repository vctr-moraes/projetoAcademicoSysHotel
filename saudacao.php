<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(E_ALL);

	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'hotel';

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
	$myquery = "select nome from mydb.cliente where cpf = " . $_SESSION["login"];
	$res = mysqli_query($conexao, $myquery);

	while($registro = mysqli_fetch_assoc($res)){
		$nomeUsuario = $registro['nome'];
		echo "Olá $nomeUsuario!";
	}
?>