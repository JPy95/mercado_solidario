<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php')?>
    </head>
    <body>
        <?php include_once('php\estruturas_base\nav_principal.php')?>
        <div id="perfil">
            <?php include_once('php\estruturas_base\sidebar_menu.php')?>
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
            <?php include_once('php\estruturas_base\solidario_score.php')?>
        </div>
        <?php include_once('php\estruturas_base\footer.php');?>
        <script type="text/javascript" src="js\progressbar.js"></script>
  </body>
</html>