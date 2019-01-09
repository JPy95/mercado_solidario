<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php') ?>
        <script type="text/javascript" src="js\progressbar.js"></script>
        <script type="text/javascript" src="https://rawgit.com/imagitama/nodelist-foreach-polyfill/master/index.js"></script>
    </head>
    <body>
        <?php include_once('php\estruturas_base\nav_principal.php') ?>
        <div id="perfil">
            <?php include_once('php\estruturas_base\sidebar_menu.php') ?>
            <div id="slide_perfil">
                <div class="title_slide">
                    <h1 class="style_title_slide">Olá Usuário!</h1>
                </div>
                <div id="slide">
                    <div class="slide_group">
                        <div class="borda_slide">
                            <img src="img\icones\ask.png" class="img_slide"><span><h3 class="style_subtitle_slide subtitle_slide">Comentários:</h3></span>
                        </div>
                        <div class="text_slide">
                            <span>Você possui <label class="desc_slide">x</label> comentários não respondidos.</span>
                        </div>
                    </div>
                    <div class="slide_group">
                        <div class="borda_slide">
                            <img src="img\icones\anuncios.png" class="img_slide"><a href="anuncios.php"><span><h4 class="style_subtitle_slide subtitle_slide">Anúncios:</h4></span></a> 
                        </div>
                        <div class="text_slide">
                            <span>Você possui <label class="desc_slide">x</label> anúncios ativos.</span>
                            <span>Você possui <label class="desc_slide">x</label> anúncios finalizados.</span>
                        </div>
                    </div>
                    <div class="slide_group">
                        <div class="borda_slide">
                            <img src="img\icones\checkout.png" class="img_slide"><span><h4 class="style_subtitle_slide subtitle_slide">Operações:</h4></span>
                        </div>
                        <div class="text_slide">
                            <span>Você possui <label class="desc_slide">x</label> vendas pendentes de concretização.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Score Solidarius-->
            <?php include_once('php\estruturas_base\solidario_score.php') ?>
        </div>
        <footer class="footer">
            <div class="footer_menu">
                <div class="footer_list">
                    <h5>Mercado Solidário</h5><br>
                    <a href="" class="footer_link">Quem somos</a><br>
                    <a href="" class="footer_link">Politica de Privacidade</a><br>
                    <a href="" class="footer_link">Politica de Troca</a>
                </div>
                <div class="footer_list">
                    <h5>Instituições</h5><br>
                    <a href="" class="footer_link">Cadastre-se</a><br>
                    <a href="" class="footer_link">Pesquisar</a>
                </div>
                <div class="footer_list">
                    <h5>Forma de Pagamento</h5><br>
                    <span><img src="img\icones\master.png"><img src="img\icones\visa.png"><img src="img\icones\paypal.png"></span><br>
                    <span><img src="img\icones\boleto.png"></span><br>
                    <h5>Compra Segura</h5>
                    <span><img src="img\icones\cadeado.png" class="img_pgto"></span>
                </div>
                <div class="footer_list">
                    <h5>Empresas Parceiras</h5><br>
                    <span>
                    </span>
                </div>
            </div>
        </footer>
        <div class="mercado">
            <span>
                <h6 class="texto_mercado">Quando ajudamos o proximo, estamos plantando o bem para podermos colher um mundo melhor! Todos os direitos reservados.</h6>
            </span>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>