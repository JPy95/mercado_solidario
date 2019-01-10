<html lang="pt-br">
  <!--HEAD -->
  <head>
    <?php include_once('php\estruturas_base\head.php') ?>
    <script type="text/javascript" src="js\progressbar.js"></script>
  </head>
  <body>
    <!--NAV -->
    <?php include_once('php\estruturas_base\nav_principal.php') ?>
    <!--SIDEBAR-->
    <div id="perfil">
      <div id="sidebar_perfil">
        <div class="sidebar_titulo">
          <img src="img\icones\menu.png" class="sidebar_img" /><span
            class="sidebar_perfil"
            >Meu Perfil</span
          >
        </div>
        <div class="sidebar_item_group">
          <div class="sidebar_menu">
            <img src="img\icones\dash.png" class="sidebar_img" />
            <a href="perfil_inst.html" class="btn_sidebar"
              ><span>Dashboard</span></a
            >
          </div>
          <div class="sidebar_menu">
            <img src="img\icones\projetos.png" class="sidebar_img" />
            <a href="new_projetos.html" class="btn_sidebar"
              ><span class="">Projetos</span></a
            >
          </div>
        </div>
      </div>
      <div id="slide_perfil">
        <div class="titulo_slide"><h1>Dashboard - Insitiução X</h1></div>
        <div id="perfil_inst">
          <div class="icone_perfil">
            <div class="info_icone">
              <label for="" class="text_icone" style="color: #00D1FF"
                >1000</label
              ><br />
              <label
                for=""
                class="text_icone"
                style="color: rgba(250, 0, 0, 0.72)"
                >Seguidores</label
              ><br />
              <img src="img\icones\follows.png" class="img_slide" />
            </div>
          </div>
          <div class="icone_perfil">
            <div class="info_icone">
              <label for="" class="text_icone" style="color: #00D1FF"
                >1000</label
              ><br />
              <label
                for=""
                class="text_icone"
                style="color: rgba(250, 0, 0, 0.72)"
                >Visualizações</label
              ><br />
              <img src="img\icones\views.png" class="img_slide" />
            </div>
          </div>
          <div class="icone_perfil">
            <div class="info_icone">
              <label for="" class="text_icone" style="color: #00D1FF"
                >1000</label
              ><br />
              <label
                for=""
                class="text_icone"
                style="color: rgba(250, 0, 0, 0.72)"
                >Curtidas</label
              ><br />
              <img src="img\icones\like.png" class="img_slide" />
            </div>
          </div>
        </div>
        <div id="slide">
          <div class="slide_group">
            <div class="borda_slide">
              <img src="img\icones\ask.png" class="img_slide" /><span
                class="subtitulo_slide"
                ><h3>Comentários:</h3></span
              >
            </div>
            <div class="text_slide">
              <span>Você possui x comentários não respondidos.</span>
            </div>
          </div>
          <div class="slide_group">
            <div class="borda_slide">
              <img src="img\icones\anuncios.png" class="img_slide" /><span
                class="subtitulo_slide"
                ><h4>Anúncios:</h4></span
              >
            </div>
            <div class="text_slide">
              <span>Você possui x anúncios ativos.</span>
              <span>Você possui x anúncios finalizados.</span>
            </div>
          </div>
          <div class="slide_group">
            <div class="borda_slide">
              <img src="img\icones\checkout.png" class="img_slide" /><span
                class="subtitulo_slide"
                ><h4>Operações:</h4></span
              >
            </div>
            <div class="text_slide">
              <span>Você possui x vendas pendentes de concretização.</span>
            </div>
          </div>
        </div>
      </div>
      <div id="star_perfil">
        <div class="score_title"><h3>Popularidade</h3></div>
        <div class="score_perfil">
          <div class="score">
            <svg height="150" width="150">
              <circle
                cx="75"
                cy="75"
                r="70"
                stroke="rgba(128, 128, 128, 0.2)"
                stroke-width="1"
                fill="rgba(128, 128, 128, 0.48)"
              ></circle>
              <circle
                cx="75"
                cy="75"
                r="57"
                stroke="rgba(128, 128, 128, 0.2)"
                stroke-width="1"
                fill="rgb(232, 250, 255)"
              ></circle>
            </svg>
          </div>
          <div class="text_score">
            <span class="lvl_score">Nivel X</span><br />
            <span class="lvl_title">Titulo do nivel</span><br />
            <span class="lvl_point"
              >Quantidade total de ponto (ex.:0/1000)</span
            >
          </div>
        </div>
      </div>
    </div>
    <!--Rodapé-->
    <?php include_once('php\estruturas_base\footer.php') ?>
  </body>
</html>
