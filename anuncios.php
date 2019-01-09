<html lang="en">
  <!--HEAD POSSUI PHP PRONTO-->
  <head>
    <?php include_once('php\estruturas_base\head.php') ?>
    <script type="text/javascript" src="js\progressbar.js"></script>
    </head>
  <body>
    <!--NAV -->
    <?php include_once('php\estruturas_base\nav_principal.php') ?>
    <!--SIDEBAR-->
    <div id="perfil">
    <?php include_once('php\estruturas_base\sidebar_menu.php') ?>  
      <!--AQUI TERÁ QUE SER MODIFICADO-->
      <div id="silede_perfil_anuncio">
        <div class="titulo_slide"><h1>Anúncios</h1></div>
        <div id="slide_anuncio">
          <div class="anuncios">
            <div class="borda_img">
              <img class="img_prod" src="img\img_prod\AirFryer.jpg" />
            </div>
            <div class="desc_anuncio">
              <div class="subtitulo_prod">
                <h4 class="borda_subtitulo">Titulo do Produto</h4>
              </div>
              <div class="descricao_anun">
                Valor do Produto:<span class="descricao_anun_valor">
                  R$x.xxx,00</span
                ><br />
                Valor Doado:<span class="descricao_anun_valor"> R$x.xxx,00</span
                ><br />
                Comentarios:<span class="descricao_anun_valor"> xx</span><br />
                Valido até:<span class="descricao_anun_valor"> xx/xx/xxxx</span>
              </div>
            </div>
            <div class="validacao">
              <img src="img\icones\validation.png" class="img_validacao" />
            </div>
          </div>
          <div class="anuncios">
            <div class="borda_img">
              <img class="img_prod" src="img\img_prod\AirFryer.jpg" />
            </div>
            <div class="desc_anuncio">
              <div class="subtitulo_prod">
                <h4 class="borda_subtitulo">Titulo do Produto</h4>
              </div>
              <div class="descricao_anun">
                Valor do Produto:<span class="descricao_anun_valor">
                  R$x.xxx,00</span
                ><br />
                Valor Doado:<span class="descricao_anun_valor"> R$x.xxx,00</span
                ><br />
                Comentarios:<span class="descricao_anun_valor"> xx</span><br />
                Valido até:<span class="descricao_anun_valor"> xx/xx/xxxx</span>
              </div>
            </div>
            <div class="validacao">
              <img src="img\icones\validation.png" class="img_validacao" />
            </div>
          </div>
          <div class="anuncios">
            <div class="borda_img">
              <img class="img_prod" src="img\img_prod\AirFryer.jpg" />
            </div>
            <div class="desc_anuncio">
              <div class="subtitulo_prod">
                <h4 class="borda_subtitulo">Titulo do Produto</h4>
              </div>
              <div class="descricao_anun">
                Valor do Produto:<span class="descricao_anun_valor">
                  R$x.xxx,00</span
                ><br />
                Valor Doado:<span class="descricao_anun_valor"> R$x.xxx,00</span
                ><br />
                Comentarios:<span class="descricao_anun_valor"> xx</span><br />
                Valido até:<span class="descricao_anun_valor"> xx/xx/xxxx</span>
              </div>
            </div>
            <div class="validacao">
              <img src="img\icones\validation.png" class="img_validacao" />
            </div>
          </div>
        </div>
      </div>
      <!--SCORE POSSUI PHP PRONTO-->
      <?php include_once('php\estruturas_base\solidario_score.php') ?>
    </div>
     <!--Rodapé-->
     <?php include_once('php\estruturas_base\footer.php') ?>
  </body>
</html>
