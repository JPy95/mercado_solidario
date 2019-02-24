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
                        <form action="php\objetos\_recuperarSenha.php" method="post">
                            <div class="form_login col-12">
                                <label for="pass" class="login_form_text">Nova senha:</label><br>
                                <input type="password" id="pass" name="pass" class="format_input col-12"><br>
                                <p id="erro-pass" class="erro_form"></p><br>
                                <label for="confirmaPass" class="login_form_text">Confirmar senha:</label><br>
                                <input type="password" id="confirmaPass" class="format_input col-12"><br>
                                <p id="erro-confirma_pass" class="erro_form"></p><br>
                            </div>
                            <input type="hidden" name="idUsuario" value="'<?php echo $_GET['idUsuario']?>'">
                            <input type="hidden" name="tipoPessoa" value="'<?php echo $_GET['tipoPessoa']?>'">
                            <div class="btn_form_login">
                                <input id="btnLogin" type="submit" value="Confirmar" class="format_btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php')?>
        <script type="text/javascript" src="js\recuperar_senha.js"></script>
  </body>
</html>