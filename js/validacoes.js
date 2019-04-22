function validar() { //Valida o formulário de cadastro de um novo cliente
	var nome = formCadastro.Fnome.value;
	var cpf = formCadastro.Fcpf.value;
	var endereco = formCadastro.Fendereco.value;
	var telefone = formCadastro.Ftelefone.value;
	var email = formCadastro.Femail.value;
	var password = formCadastro.Fpassword.value;

	if (nome == "") {
		alert('Preencha o campo Nome');
		formCadastro.Fnome.focus();
		return false;
	}
	if (cpf == "") {
		alert('Preencha o campo CPF');
		formCadastro.Fcpf.focus();
		return false;
	}
	if (endereco == "") {
		alert('Preencha o campo Endereço');
		formCadastro.Fendereco.focus();
		return false
	}
	if (telefone == "") {
		alert('Preencha o campo Telefone');
		formCadastro.Ftelefone.focus();
		return false;
	}
	if (email == "") {
		alert('Preencha o campo E-mail');
		formCadastro.Femail.focus();
		return false;
	}
	if (password == "") {
		alert('Preencha o campo Senha');
		formCadastro.Fpassword.focus();
		return false;
	}
}

function validarLogin() { //Valida o formulário de login do usuário
	var login = formLogin.Fcpf.value;
	var senha = formLogin.Fsenha.value;

	if (login == "") {
		alert('Preencha o campo Login');
		formLogin.Fcpf.focus();
		return false;
	}
	if (senha == "") {
		alert('Preencha o campo Senha');
		formLogin.Fsenha.focus();
		return false;
	}
}