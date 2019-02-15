<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php')?>
        <link rel="stylesheet" type="text/css" href="css\modals.css">
    </head>
    <body onload="validacao_login()">
        <?php include_once('php\estruturas_base\modals\esqueceu_senha.php')?>
        <nav>
            <?php include_once('php\estruturas_base\nav_principal.php')?>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-8 col-xl-4" id="login">
                    <div class="row login">
                        <h1 class="login_titulo">Login</h1>
                    </div>
                    
                    <div class="login_form">
                        <form action="php\objetos\_login.php" method="post">
                            <div class="form_login col-12">
                                <label for="email" class="login_form_text">E-mail:</label><br>
                                <input id="e-mail" type="email"  name="email" class="col-12 format_input"><br>
                                <label for="pass" class="login_form_text">Senha:</label><br>
                                <input type="password" id="pass" name="pass" class="col-12 format_input">
                                <a id="esqueceuSenha" href="#" class="login_link" data-toggle="modal" data-target="#modalEsqueceuSenha">Esqueceu a Senha?</a><br>
                                <span class="login_span">Não possui cadastro? </span><a href="register.php" class="login_link"> Cadastre-se</a>
                            </div>
                            <div class="btn_form_login">
                                <input type="submit" value="Acessar" class="format_btn" onclick="validacao_login()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php')?>
        <script type="text/javascript" src="js\validacao_login.js"></script>
  </body>
</html>