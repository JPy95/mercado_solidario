<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php')?>
    </head>
    <body>
        <?php include_once('php\estruturas_base\nav_principal.php')?>
        <div id="perfil">
            <?php include_once('php\estruturas_base\sidebar_menu.php')?>
            <div id="slide_perfil">
                <div class="titulo_slide">
                    <h1>Dashboard - Usuário X</h1>
                </div>
                <div id="slide">
                    <div class="slide_group">
                        <div class="borda_slide">
                            <img src="img\icones\ask.png" class="img_slide"><span class="subtitulo_slide"><h3>Comentários:</h3></span>
                        </div>
                        <div class="text_slide">
                            <span>Você possui x comentários não respondidos.</span>
                        </div>
                    </div>
                    <div class="slide_group">
                        <div class="borda_slide">
                            <img src="img\icones\anuncios.png" class="img_slide"><a href="anuncios.html"><span class="subtitulo_slide"><h4>Anúncios:</h4></span></a> 
                        </div>
                        <div class="text_slide">
                            <span>Você possui x anúncios ativos.</span>
                            <span>Você possui x anúncios finalizados.</span>
                        </div>
                    </div>
                    <div class="slide_group">
                        <div class="borda_slide">
                            <img src="img\icones\checkout.png" class="img_slide"><span class="subtitulo_slide"><h4>Operações:</h4></span>
                        </div>
                        <div class="text_slide">
                            <span>Você possui x vendas pendentes de concretização.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="star_perfil">
                <div class="score_title">
                    <h3>Solidariu's King</h3>
                </div>
                <div class="score_perfil">
                    <div class="score">
                        <svg height="150" width="150">
                            <circle cx="75" cy="75" r="70" stroke="rgba(128, 128, 128, 0.2)" stroke-width="1" fill="rgba(128, 128, 128, 0.48)"></circle>
                            <circle cx="75" cy="75" r="57" stroke="rgba(128, 128, 128, 0.2)" stroke-width="1" fill="rgb(232, 250, 255)"></circle>
                        </svg>
                    </div>
                    <div class="text_score">
                        <span class="lvl_score">Nivel X</span><br>
                        <span class="lvl_title">Titulo do nivel</span><br>
                        <span class="lvl_point">Quantidade total de ponto (ex.:0/1000)</span>
                    </div>
                </div>
            </div>
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