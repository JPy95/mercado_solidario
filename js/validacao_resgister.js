//Função não deixa usuario escrever somente o primeiro nome
function valida_nome() {
  var nome = document.getElementById("nome");
  if (nome.value.length >= 8) {
    nome.classList.add("ok");
    return true;
  } else {
    nome.classList.add("error");
    document.getElementById("erro-nome").innerHTML =
      "Favor preencher seu nome e sobrenome.";
  }
  return false;
}
//Bloqueia o usuario digitar um cpf menor ou maior que 14 digitos.
function valida_cpf(){
  var cpf = document.getElementById("cpf");
  if (cpf.value.length == 14) {
    cpf.classList.add("ok");
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
  if (
    email.value == "" &&
    (email.value.indexOf("@") < 1 || email.value.indexOf(".") < 7)
  ) {
    email.classList.add("error");
    document.getElementById("erro-email").innerHTML = "E-mail invalido.";
  } else {
    email.classList.add("ok");
    return true;
  }
  return false;
}
//Validação de senha com no minimo 8 digitos
function valida_pass() {
  var pass = document.getElementById("pass");
  if (pass.value.length >= 8) {
    pass.classList.add("ok");
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
    confirma_pass.classList.add("ok");
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

//Função de correção de nome

function corrigirNome(){
    document.getElementById("lblNome").innerHTML = "Razão Social:";
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
