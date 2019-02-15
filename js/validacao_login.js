function validacao_login() {
    var email = document.getElementById('e-mail');
    var pass = document.getElementById('pass');
    var query = location.search;

    var query = query.replace("?","");

    if(query == "login=false"){
        alert("cole");
        email.classList.add('error');
        pass.classList.add('error');
    }
}

function validacaoModal(){
    this.cpf = document.getElementById('cpf');
    this.tipoPessoa = document.getElementById('tipo_pessoa').value;
    this.labelCpfCnpj = document.getElementById('lblCpf').innerHTML;

    this.bind = function(){
        document.getElementById('tipo_pessoa').addEventListener('mouseout',this.alteraCPF());
        this.cpf.addEventListener('keydown',this.mascaraCPF(this));
    }

    this.alteraCPF = function (){
        if(this.tipoPessoa == "juridica" || this.tipoPessoa == "instituicao"){
            this.cpf.innerHTML = "CNPJ:";
          } else {
            this.cpf.innerHTML = "CPF:";
          }
    }

    this.mascaraCPF = function(valor){
        if(this.labelCpfCnpj.replace(":","")=="CPF"){
            this.cpf.maxLength = 14;
            valor = valor.replace(/\D/g, "");
            valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
            valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
            valor = valor.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
            return valor;
        } else {
            this.cpf.maxLength = 18;
            valor = valor.replace(/^(\d{2})(\d)/, "$1.$2");
            valor = valor.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
            valor = valor.replace(/\.(\d{3})(\d)/, ".$1/$2");
            valor = valor.replace(/(\d{4})(\d)/, "$1-$2");
            return valor;
        }
    }
}

var validaEsqueceuSenha = new validacaoModal();
validaEsqueceuSenha.bind();