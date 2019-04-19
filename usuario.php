<?php
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(E_ALL);
	
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'hotel';

	$cpf = $_POST['Fcpf'];
	$nome = $_POST['Fnome'];
	$endereco = $_POST['Fendereco'];
	$telefone = $_POST['Ftelefone'];
	$email = $_POST['Femail'];
	$password = $_POST['Fpassword'];

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
	$myquery = "insert into mydb.cliente(cpf, nome, endereco, telefone, email, senha)
		values('$cpf', '$nome', '$endereco', '$telefone', '$email', '$password')";

	if(mysqli_query($conexao, $myquery)){
		echo "<center>Cadastro realizado com sucesso!</center>";
		header("Location:login.php");
	}else{
		echo "ERRO! " . mysqli_error($conexao);
	}
	mysqli_close($conexao);
	//header("Location:login.php");
?>

<center>
	<br><a href="login.php">Voltar</a>
</center>