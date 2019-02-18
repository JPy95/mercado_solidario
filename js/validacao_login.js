function validacao_login() {
    var email = document.getElementById('e-mail');
    var pass = document.getElementById('pass');
    var query = location.search;

    var query = query.replace("?","");

    if(query == "login=false"){
        email.classList.add('error');
        pass.classList.add('error');
    }
}

function alteraCPF(){
    var tipoPessoa = document.getElementById('tipo_pessoa').value;
    var cpf = document.getElementById('lblCpf');
    if(tipoPessoa == "juridica" || tipoPessoa == "instituicao"){
        cpf.innerHTML = "CNPJ:";
    } else {
        cpf.innerHTML = "CPF:";
    }
}

function fMasc(objeto, mascara) {
    obj = objeto;
    masc = mascara;
    setTimeout("fMascEx()", 1);
}

function fMascEx() {
    obj.value = masc(obj.value);
}

function mascaraCPF(valor) {
    var cpf_cnpj = document.getElementById('lblCpf').innerHTML;
    var inputCpf = document.getElementById('cpf');
    if(cpf_cnpj.replace(":","")=="CPF"){
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