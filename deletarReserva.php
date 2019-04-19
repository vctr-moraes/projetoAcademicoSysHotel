<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(E_ALL);
	session_start();
	
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'hotel';

	include_once("validar.php");

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
	$login = $_POST['Fcpf'];
	$password = $_POST['Fsenha'];
	$myquery = "delete from mydb.reserva where fkCliente = " . $_SESSION["login"];

	if(mysqli_query($conexao, $myquery)){
		echo "<center>Reserva cancelada com sucesso!</center>";
	}else{
		echo "ERRO! " . mysqli_error($conexao);
	}
	mysqli_close($conexao);
	header("Location:clienteAdmin.php");
?>