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

	$endereco = $_POST['Fendereco'];
	$telefone = $_POST['Ftelefone'];
	$email = $_POST['Femail'];
	$password = $_POST['Fpassword'];

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
	$myquery = "update mydb.cliente set endereco = '$endereco', telefone = '$telefone', email = '$email', senha = '$password' where cpf = " . $_SESSION["login"];
	$res = mysqli_query($conexao, $myquery) or die ("Erro ao pesquisar dados do cliente " . mysqli_error());

	mysqli_close();
	header("Location: editarUsuario.php#tabs-4");
