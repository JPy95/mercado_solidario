function RecuperarSenha(){

    this.init = function(){
        this.pass = document.getElementById('pass');
        this.erroPass = document.getElementById('erro-pass');
        this.confirmaPass = document.getElementById('confirmaPass');
        this.erroConfirmaPass = document.getElementById('erro-confirma_pass');
        this.query = location.search;
    }

    this.bind = function(){
        this.pass.addEventListener("blur",this.validarSenha.bind(this),false);
        this.confirmaPass.addEventListener("blur",this.validarConfirmaSenha.bind(this),false);
        window.addEventListener("load",this.validarRetorno.bind(this),false);
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
        if (this.confirmaPass.value == this.pass.value) {
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

    this.validarRetorno = function(){
        if(this.query.replace("?","") == "reucuperarSenha=false"){
            this.pass.classList.add("error");
            this.erroPass.innerHTML = "A senha não pode ser igual a anterior.";
            return false;
        }
    }
}

var recuperarSenha = new RecuperarSenha();
recuperarSenha.init();
recuperarSenha.bind();