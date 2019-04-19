<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Alterar Dados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script language="javascript" type="text/javascript" src="js/validacoes.js">
		function validar();
	</script>
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
		echo "<h3>Atualizar Dados</h3>";

		error_reporting(E_ALL ^ E_NOTICE);
		error_reporting(E_ALL);

		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$banco = 'hotel';

		$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar" . mysqli_error());
		$myquery = "select endereco, telefone, email, senha from mydb.cliente where cpf = " . $_SESSION["login"];
		$res = mysqli_query($conexao, $myquery) or die ("Erro ao pesquisar dados do cliente " . mysqli_error());

		while($registro = mysqli_fetch_assoc($res)){
			$endereco = $registro['endereco'];
			$telefone = $registro['telefone'];
			$email = $registro['email'];
			$senha = $registro['senha'];

			    echo "
					<form name=\"formCadastro\" action =\"salvarEdicaoCliente.php\" method =\"post\">
						Endereço <br>
						<input type=\"text\" name=\"Fendereco\" size=\"110\" value=\"$endereco\"> <br><br>
						Telefone <br>
						<input type=\"text\" name=\"Ftelefone\" size=\"110\" value=\"$telefone\"> <br><br>
						E-mail <br>
						<input type=\"Email\" name=\"Femail\" size=\"110\" value=\"$email\"> <br><br>
						Senha <br>
						<input type=\"password\" name=\"Fpassword\" size=\"110\" maxlength=\"8\" placeholder=\"Somente números\" value=\"$senha\"><br><br>
						<a href=\"editarUsuario.php\">Cancelar</a>&nbsp;&nbsp;&nbsp;
						<input type=\"submit\" name=\"Enviar\" value=\"Confirmar\" onclick=\"return validar()\">
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