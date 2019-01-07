function validacao_login() {
    var email = document.getElementById('email');
    var pass = document.getElementById('pass');
    if (email.value == "") {
        email.classList.add('error');
    }
    if (pass.value == "") {
        pass.classList.add('error');
    }
}