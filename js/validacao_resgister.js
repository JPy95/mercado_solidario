//Função não deixa usuario escrever somente o primeiro nome
function valida_nome() {
  var nome = document.getElementById("nome");
  if (limparCamposVazios(nome.value).length >= 8) {
    nome.classList.remove("error");
    nome.classList.add("ok");
    document.getElementById("erro-nome").innerHTML = "";
  } else {
    document.getElementById("erro-nome").innerHTML =
      "Favor preencher seu nome e sobrenome.";
    nome.classList.add("error");
  }
}
//Bloqueia o usuario digitar um cpf menor ou maior que 14 digitos.
function valida_cpf() {
  var cpf = document.getElementById("cpf");
  var cpf_cnpj = document.getElementById("lblCpf").innerHTML;
  var query = location.search.slice(1);
  if (query == "register=false") {
    cpf.classList.add("error");
    document.getElementById("erro-cpf").innerHTML = "CPF/CNPJ já cadastrado.";
  } else {
    if (cpf.value.length == 14) {
      cpf.classList.remove("error");
      cpf.classList.add("ok");
      document.getElementById("erro-cpf").innerHTML = "";
    } else if (cpf.value.length == 18) {
      cpf.classList.remove("error");
      cpf.classList.add("ok");
      document.getElementById("erro-cpf").innerHTML = "";
    } else {
      cpf.classList.add("error");
      document.getElementById("erro-cpf").innerHTML =
        cpf_cnpj.replace(":", "") + " invalido.";
    }
  }
  return false;
}

//Valida email com o caractere "@" e "."
function valida_email() {
  var email = document.getElementById("email");
  var query = location.search.slice(1);
  if (query == "register=false") {
    email.classList.add("error");
    document.getElementById("erro-email").innerHTML = "E-mail já cadastrado.";
  } else {
    if (
      email.value == "" &&
      (email.value.indexOf("@") < 1 || email.value.indexOf(".") < 7)
    ) {
      email.classList.add("error");
      document.getElementById("erro-email").innerHTML = "E-mail invalido.";
    } else {
      email.classList.remove("error");
      email.classList.add("ok");
      document.getElementById("erro-email").innerHTML = "";
      return true;
    }
  }
  return false;
}
//Validação de senha com no minimo 8 digitos
function valida_pass() {
  var pass = document.getElementById("pass");
  if (pass.value.length >= 8) {
    pass.classList.remove("error");
    pass.classList.add("ok");
    document.getElementById("erro-pass").innerHTML = "";
    return true;
  } else {
    pass.classList.add("error");
    document.getElementById("erro-pass").innerHTML =
      "A senha deve conter no minimo 8 digitos.";
  }
  return false;
}
//Valida igualdade de senhas
function valida_check_pass() {
  var confirma_pass = document.getElementById("confirma_pass");
  if (confirma_pass.value == document.getElementById("pass").value) {
    confirma_pass.classList.remove("error");
    confirma_pass.classList.add("ok");
    document.getElementById("erro-confirma_pass").innerHTML = "";
    return true;
  } else {
    confirma_pass.classList.add("error");
    document.getElementById("erro-confirma_pass").innerHTML =
      "As senhas devem ser iguais.";
  }
  return false;
}
//Valida todos os formularios acima para realizar a submissão ao banco de dados.
function valida_form() {
  if (
    valida_nome() &&
    valida_cpf() &&
    valida_email() &&
    valida_pass() &&
    valida_check_pass()
  ) {
    document.register.submit();
  }
}

//função para nome
function alterarNome() {
  var btnIntituicoes = document.getElementById("btnInst");

  if (btnIntituicoes.attributes[6].value == "false") {
    document.getElementById("lblNome").innerHTML = "Razão Social:";
    document.getElementById("lblCpf").innerHTML = "CNPJ:";
    document.getElementById("tipo_pessoa").value = "instituicao";
  } else {
    document.getElementById("lblNome").innerHTML = "Nome:";
    document.getElementById("lblCpf").innerHTML = "CPF:";
  }
}

function alteraNome() {
  var selectTipoPessoa = document.getElementById("tipo_pessoa").value;
  if (selectTipoPessoa == "juridica") {
    document.getElementById("lblNome").innerHTML = "Razão Social:";
    document.getElementById("lblCpf").innerHTML = "CNPJ:";
  } else {
    document.getElementById("lblNome").innerHTML = "Nome:";
    document.getElementById("lblCpf").innerHTML = "CPF:";
  }
}

//Função para eliminar campos vazios
function limparCamposVazios(string) {
  return string.trim();
}

//Funções para mascara

function fMasc(objeto, mascara) {
  obj = objeto;
  masc = mascara;
  setTimeout("fMascEx()", 1);
}

function fMascEx() {
  obj.value = masc(obj.value);
}

//Mascara CPF
function mCPF(valor) {
  var cpf_cnpj = document.getElementById("lblCpf").innerHTML;
  var inputCpf = document.getElementById("cpf");
  if (cpf_cnpj.replace(":", "") == "CPF") {
    inputCpf.maxLength = 14;
    valor = valor.replace(/\D/g, "");
    valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
    valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
    valor = valor.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    return valor;
  } else {
    inputCpf.maxLength = 18;
    valor = valor.replace(/^(\d{2})(\d)/, "$1.$2");
    valor = valor.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
    valor = valor.replace(/\.(\d{3})(\d)/, ".$1/$2");
    valor = valor.replace(/(\d{4})(\d)/, "$1-$2");
    return valor;
  }
}
