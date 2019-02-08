<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php')?>
    </head>
    <body>
        <?php include_once('php\estruturas_base\modals\esqueceu_senha.php')?>
        <nav>
            <?php include_once('php\estruturas_base\nav_principal.php')?>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-8 col-xl-4" id="login">
                    <div class="row login">
                        <h1 class="login_titulo">Recuperar senha</h1>
                    </div>
                    <div class="login_form">
                        <form action="php\formularios\_login.php" method="post">
                            <div class="form_login col-12">
                                <label for="email" class="login_form_text">Nova senha:</label><br>
                                <input type="email" id="email" class="format_input col-12"><br>
                                <label for="pass" class="login_form_text">Confirmar senha:</label><br>
                                <input type="password" id="pass" class="format_input col-12">
                            </div>
                            <div class="btn_form_login">
                                <input type="submit" value="Confirmar" class="format_btn" onclick="validacao_login()">
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