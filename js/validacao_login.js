function ValidarLogin (){

    this.init = function(){
        this.email = document.getElementById('e-mail');
        this.pass = document.getElementById('pass');
        this.tipoPessoa = document.getElementById('tipo_pessoa');
        this.lblCpf = document.getElementById('lblCpf');
        this.cpf = document.getElementById('cpf'); 
        this.query = location.search;
    }

    this.bind = function(){
        window.addEventListener('load',this.validacao_login.bind(this),false);
        document.getElementById('btnLogin').addEventListener('click',this.validacao_login.bind(this),false);
        this.tipoPessoa.addEventListener('mouseout',this.alteraCPF.bind(this),false);
        this.cpf.addEventListener("keydown",this.retornaMascara.bind(this),false);
    }

    //recupera o retorno da url para mostrar qual dado esta errado
    this.validacao_login = function() {
        if(this.query.replace("?","") == "login=false"){
            this.email.classList.add('error');
            this.pass.classList.add('error');
        }
    }

    //altera o tipo de cadastro de pessoa (CPF ou CNPJ)
    this.alteraCPF = function(){
        if(this.tipoPessoa.value == "juridica" || this.tipoPessoa.value == "instituicao"){
            this.lblCpf.innerHTML = "CNPJ:";
        } else {
            this.lblCpf.innerHTML = "CPF:";
        }
    }

    //adiciona mascara do CPF ou CNPJ
    this.retornaMascara = function(){
        this.cpf.value = this.mCPF();
    }

    this.mCPF = function() {
        let valor = this.cpf.value;
        if (this.lblCpf.innerHTML.replace(":", "") == "CPF") {
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

var validarLogin = new ValidarLogin();
validarLogin.init();
validarLogin.bind();




