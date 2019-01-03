<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php')?>
        <script type="text/javascript" src="js\validacao_login.js"></script>
    </head>
    <body>
        <nav>
            <?php include_once('php\estruturas_base\nav_principal.php')?>
        </nav>
        <div id="login">
            <div class="login_titulo">
                <h2>Login</h2>
            </div>
            <div class="retorno">
                <p id="retorno"></p>
            </div>
            <div class="login_form">
                <form action="php\formularios\_login.php" method="post">
                    <label for="email">E-mail:</label><br>
                    <input class="format_input" id="email" name="email" type="email" placeholder="exemplo@gmail.com"><br>
                    <label for="pass">Senha</label><br>
                    <input class="format_input" id="pass" name="pass" type="password">
                    <a href="" class="login_link"><span>Esqueceu a senha?</span></a><br>
                    <span class="login_span">Ainda não possui cadastro? </span><a href="register.php" class="login_link">Cadastre-se aqui.</a><br><br>
                    <button type="button" class="format_btn" onclick="validacao_login() ">Acessar</button>
                </form>
            </div>
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php')?>
  </body>
</html>