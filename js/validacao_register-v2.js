function ValidacaoRegister(){
    
    //função para iniciar as variaveis
    this.init = function(){
        this.nome = document.getElementById("nome");
        this.erroNome = document.getElementById("erro-nome");
        this.lblNome = document.getElementById("lblNome");
        this.cpf = document.getElementById("cpf");
        this.lblCpf = document.getElementById("lblCpf");
        this.erroCpf = document.getElementById("erro-cpf");
        this.email = document.getElementById("email");
        this.erroEmail = document.getElementById("erro-email");
        this.pass = document.getElementById("pass");
        this.erroPass = document.getElementById("erro-pass");
        this.confirmaPass = document.getElementById("confirma_pass");
        this.erroConfirmaPass = document.getElementById("erro-confirma_pass")
        this.btnSubmit = document.getElementById("btnSubmit");
        this.btnIntituicoes = document.getElementById("btnInst");
        this.tipoPessoa = document.getElementById("tipo_pessoa");
        this.query = location.search.slice(1);
    }
    
    //função para iniciar os eventos
    this.bind = function(){
        //abaixo serão os metodos que irão tratar os dados antes de serem enviados ao BD.
        this.nome.addEventListener("blur",this.validarNome.bind(this),false);
        this.cpf.addEventListener("blur",this.validarCpf.bind(this),false);
        this.email.addEventListener("blur",this.validarEmail.bind(this),false);
        this.pass.addEventListener("blur",this.validarSenha.bind(this),false);
        this.confirmaPass.addEventListener("blur",this.validarConfirmaSenha.bind(this),false);
        this.btnSubmit.addEventListener("click",this.validarFormulario.bind(this),false);
        this.btnIntituicoes.addEventListener("click",this.modificarNome.bind(this),false);
        this.tipoPessoa.addEventListener("mouseout",this.modificaTituloNome.bind(this),false);
        this.cpf.addEventListener("keydown",this.retornaMascara.bind(this),false);
        //abaixo a função pos envido de dados
        window.addEventListener("load",this.validarRetorno.bind(this),false);
    }


    //Função não deixa usuario escrever somente o primeiro nome
    this.validarNome = function(){
        if (this.limparCamposVazios(this.nome.value).length >= 8) {
            this.nome.classList.remove("error");
            this.nome.classList.add("ok");
            this.erroNome.innerHTML = "";
            return true;
        } else {
            this.erroNome.innerHTML = "Favor preencher seu nome e sobrenome.";
            this.nome.classList.add("error");
            return false;
        }
    }

    //Bloqueia o usuario digitar um cpf <> de 14 digitos e cnpj <> de 18 digitos
    this.validarCpf = function(){
        if (this.cpf.value.length == 14) {
            this.cpf.classList.remove("error");
            this.cpf.classList.add("ok");
            this.erroCpf.innerHTML = "";
            return true;
        } else if (this.cpf.value.length == 18) {
            this.cpf.classList.remove("error");
            this.cpf.classList.add("ok");
            this.erroCpf.innerHTML = "";
            return true;
        } else {
            this.cpf.classList.add("error");
            this.erroCpf.innerHTML = this.lblCpf.replace(":", "") + " invalido.";
            return false;
        }
    }

    //Valida email com o caractere "@" e "."
    this.validarEmail = function(){
        if (this.email.value == "" && (this.email.value.indexOf("@") < 1 || this.email.value.indexOf(".") < 7)) {
            this.email.classList.add("error");
            this.erroEmail.innerHTML = "E-mail invalido.";
            return true;
        } else {
            this.email.classList.remove("error");
            this.email.classList.add("ok");
            this.erroEmail.innerHTML = "";
            return false;
        }
    }

    //Validação de senha com no minimo 8 digitos
    this.validarSenha = function(){
        if (this.pass.value.length >= 8) {
            this.pass.classList.remove("error");
            this.pass.classList.add("ok");
            this.erroPass.innerHTML = "";
            return true;
        } else {
            this.pass.classList.add("error");
            this.erroPass.innerHTML = "A senha deve conter no minimo 8 digitos.";
            return false;
        }
    }
    //Validação a igualdade das senhas
    this.validarConfirmaSenha = function(){
        if (this.confirmaPass.value == document.getElementById("pass").value) {
            this.confirmaPass.classList.remove("error");
            this.confirmaPass.classList.add("ok");
            this.erroConfirmaPass.innerHTML = "";
            return true;
        } else {
            this.confirmaPass.classList.add("error");
            this.erroConfirmaPass.innerHTML = "As senhas devem ser iguais.";
            return false;
        }
    }

    //Valida todos os formularios acima para realizar a submissão ao banco de dados.
    this.validarFormulario = function() {
        if (this.validarNome() && this.validarCpf() && this.validarEmail() && this.validarSenha() && this.validarConfirmaSenha()) {
            document.register.submit();
        }
    }

    //Função para alterar o subtitulo de Nome para Razão Sociao, caso o usuario clique no botão de instituições. Ou seleciona a Opção PJ.
    this.modificaTituloNome = function() {
        if (this.tipoPessoa.value == "instituicao") {
            this.lblNome.innerHTML = "Razão Social:";
            this.lblCpf.innerHTML = "CNPJ:";
        } else if (this.tipoPessoa.value == "juridica") {
            this.lblNome.innerHTML = "Razão Social:";
            this.lblCpf.innerHTML = "CNPJ:";
        } else {
            this.lblNome.innerHTML = "Nome:";
            this.lblCpf.innerHTML = "CPF:";
        }
    }

    this.modificarNome = function(){
        this.tipoPessoa.value = "instituicao";
        this.modificaTituloNome();
    }

    //Função para eliminar campos vazios
    this.limparCamposVazios = function(string) {
        return string.trim();
    }

    //Abaixo são funções add mascaras no cpf e cnpj
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
    
    //Abaixo funções de retorno apos dados serem enviados para o BD
    this.validarRetorno = function(){
        if(this.query == "register=false"){
            this.cpf.classList.add("error");
            this.erroCpf.innerHTML = "CPF/CNPJ já cadastrado.";
            this.email.classList.add("error");
            this.erroEmail.innerHTML = "E-mail já cadastrado.";
        } else if (this.query == "cpf_cnpj=false"){
            this.cpf.classList.add("error");
            this.erroCpf.innerHTML = "CPF/CNPJ já cadastrado.";
        } else if (this.query == "email=false"){
            this.email.classList.add("error");
            this.erroEmail.innerHTML = "E-mail já cadastrado.";
        } else {
            return true;
        }
    }
}

var newForm = new ValidacaoRegister();
newForm.init();
newForm.bind();