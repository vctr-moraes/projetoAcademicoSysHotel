<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(E_ALL);

	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'hotel';

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
	$login = $_POST['Fcpf'];
	$password = $_POST['Fsenha'];

	$myquery = "select cpf, senha from mydb.cliente where cpf = '$login' and senha = '$password'";
	$res = mysqli_query($conexao, $myquery) or die ("Erro ao pesquisar login" . mysqli_error());

	if($registro = mysqli_fetch_assoc($res)){
		//Criar a sessão. Login e senha conferem
		session_start();
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $password;
		header("Location:clienteAdmin.php");
	}else{
		//Login e senha não conferem
		mysqli_close($conexao);
		header("Location:login.php?erro=Login ou senha inválidos!<br>Por favor, digite novamente.");
	}
?>