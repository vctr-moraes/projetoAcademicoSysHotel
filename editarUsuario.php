<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cliente Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body style="margin-left: 5%; margin-right: 5%; margin-top: 2%">
	
	<?php require 'cabecalho.php'; ?>

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

		error_reporting(E_ALL ^ E_NOTICE);
		error_reporting(E_ALL);

		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$banco = 'hotel';

		$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
		$myquery = "select nome, cpf, endereco, telefone, email, senha from mydb.cliente where cpf = " . $_SESSION["login"];
		$res = mysqli_query($conexao, $myquery) or die ("Erro ao pesquisar dados do cliente " . mysqli_error());
		
		echo "<h3>Meus Dados</h3>";
		echo "<table border=1>";
		echo "<tr>
		        <td>Nome</td>
		        <td>CPF</td>
		        <td>Endereço</td>
		        <td>Telefone</td>
		        <td>E-mail</td>
		        <td>Senha</td>
		     </tr>";
		     
		while($registro = mysqli_fetch_assoc($res)){
			$nome = $registro['nome'];
			$cpf = $registro['cpf'];
			$endereco = $registro['endereco'];
			$telefone = $registro['telefone'];
			$email = $registro['email'];
			$senha = $registro['senha'];

			echo "<tr>
			        <td>$nome</td>
			        <td>$cpf</td>
			        <td>$endereco</td>
			        <td>$telefone</td>
			        <td>$email</td>
			        <td>$senha</td>
			     </tr>";
		}
		echo "</table>";
	?>
	<br>
	<a href="alterarCadastro.php">Editar</a>
<br><br><br>

</body>
	<div class="footer">
		<hr width="1200">
		<center>
			<p>Golden Tulip :: Av. Nossa Sra. dos Navegantes - Enseada do Suá - Vitória - Espírito Santo <br> Telefone: (27) 3533-1300 - Email: atendimento@goldentulip.com</p>
		</center>
	</div>
</html>