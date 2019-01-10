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
      <div id="silede_perfil_anuncio">
        <div class="titulo_slide"><h2>Projetos - Instituição X</h2></div>
        <div id="slide_anuncio">
          <div class="anuncios">
            <div class="borda_img">
              <img class="img_prod" src="img\img_prod\AirFryer.jpg" />
            </div>
            <div class="desc_anuncio">
              <div class="subtitulo_prod">
                <h4 class="borda_subtitulo">Titulo do Projeto</h4>
              </div>
              <div class="descricao_anun">
                Custo do Projeto:<span class="descricao_anun_valor">
                  R$x.xxx,00</span
                ><br />
                Duração:<span class="descricao_anun_valor"> xxx dias</span
                ><br />
                Progresso:<span class="descricao_anun_valor"> xxx%</span>
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
                <h4 class="borda_subtitulo">Titulo do Projeto</h4>
              </div>
              <div class="descricao_anun">
                Custo do Projeto:<span class="descricao_anun_valor">
                  R$x.xxx,00</span
                ><br />
                Duração:<span class="descricao_anun_valor"> xxx dias</span
                ><br />
                Progresso:<span class="descricao_anun_valor"> xxx%</span>
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
                <h4 class="borda_subtitulo">Titulo do Projeto</h4>
              </div>
              <div class="descricao_anun">
                Custo do Projeto:<span class="descricao_anun_valor">
                  R$x.xxx,00</span
                ><br />
                Duração:<span class="descricao_anun_valor"> xxx dias</span
                ><br />
                Progresso:<span class="descricao_anun_valor"> xxx%</span>
              </div>
            </div>
            <div class="validacao">
              <img src="img\icones\validation.png" class="img_validacao" />
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
