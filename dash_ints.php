<html lang="pt-br">
  <!--HEAD -->
  <head>
    <?php include_once('php\estruturas_base\head.php') ?>
    <script type="text/javascript" src="js\progressbar.js"></script>
  </head>
  <body>
    <!--NAV -->
    <?php include_once('php\estruturas_base\nav_principal.php') ?>
    <div id="perfil">
      <?php include_once('php\estruturas_base\sidebar_menu_inst.php')?>
      <div id="slide_perfil">
        <div class="title_slide">
          <h1 class="style_title_slide">Dashboard</h1>
        </div>
        <div id="perfil_inst">
          <div class="icone_perfil">
            <div class="info_icone">
              <label for="" class="text_icone" style="color: #00D1FF">1000</label><br />
              <label for="" class="text_icone" style="color: rgba(250, 0, 0, 0.72)">Seguidores</label><br />
              <img src="img\icones\follows.png" class="img_slide" />
            </div>
          </div>
          <div class="icone_perfil">
            <div class="info_icone">
              <label for="" class="text_icone" style="color: #00D1FF">1000</label><br />
              <label for="" class="text_icone" style="color: rgba(250, 0, 0, 0.72)">Visualizações</label><br />
              <img src="img\icones\views.png" class="img_slide" />
            </div>
          </div>
          <div class="icone_perfil">
            <div class="info_icone">
              <label for="" class="text_icone" style="color: #00D1FF">1000</label><br />
              <label class="text_icone" style="color: rgba(250, 0, 0, 0.72)">Curtidas</label><br />
              <img src="img\icones\like.png" class="img_slide" />
            </div>
          </div>
        </div>
        <div id="slide">
          <div class="slide_group">
            <div class="borda_slide">
              <img src="img\icones\projeto_slide.png" class="img_slide" />
              <span><h3 class="style_subtitle_slide subtitle_slide">Projetos:</h3></span>
            </div>
            <div class="text_slide">
              <span>Você possui <label class="desc_slide">x</label> projetos ativos.</span><br>
              <span>Você possui <label class="desc_slide">x</label> projetos inativos.</span>
            </div>
          </div>
          <div class="slide_group">
            <div class="borda_slide">
              <img src="img\icones\doacao.png" class="img_slide" />
              <span><h4 class="style_subtitle_slide subtitle_slide">Doações:</h4></span>
            </div>
            <div class="text_slide">
              <span>Já foram doados à você <label class="desc_slide">R$xxxx,00</label></span><br>
            </div>
          </div>
        </div>
      </div>
      <?php include_once('php\estruturas_base\solidario_score.php')?>
    </div>
    <!--Rodapé-->
    <?php include_once('php\estruturas_base\footer.php') ?>
  </body>
</html>
