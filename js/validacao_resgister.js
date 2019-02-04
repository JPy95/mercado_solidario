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
  var btnCpf = document.getElementById("btn-cpf");
  var btnCnpj = document.getElementById("btn-cnpj");
  if (cpf.value.length == 14) {
    cpf.classList.add("ok");
    btnCpf.classList.add("active");
    return true;
  } else if(cpf.value.length == 18){
    cpf.classList.add("ok");
    btnCnpj.classList.add("active");
    return true;
  } else {
    cpf.classList.add("error");
    document.getElementById("erro-cpf").innerHTML = "CPF invalido.";
  }
  return false;
}

//Valida email com o caractere "@" e "."
function valida_email() {
  var email = document.getElementById("email");
  if (email.value == "" && (email.value.indexOf("@") < 1 || email.value.indexOf(".") < 7)) {
    email.classList.add("error");
    document.getElementById("erro-email").innerHTML = "E-mail invalido.";
  } else {
    email.classList.remove("error");
    email.classList.add("ok");
    document.getElementById("erro-email").innerHTML = "";
    return true;
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
      "A senha deve conter no minimo 8 letras.";
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
  if ( valida_nome() && valida_cpf() && valida_email() && valida_pass() && valida_check_pass() ) {
    document.register.submit();
  }
}

//função para nome
function alterarNome() {
  var btnIntituicoes = document.getElementById("btnInst");
  if (btnIntituicoes.attributes[6].value == "false") {
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
function mCPF(cpf) {
  cpf = cpf.replace(/\D/g, "");
  cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
  cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
  cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
  return cpf;
}
