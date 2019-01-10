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
      <div id="slide_perfil">
        <div class="titulo_slide"><h2>Adicionar Novo Projeto</h2></div>
        <div id="slide">
          <div id="register_form_projeto">
            <div>
              <label for="">Titulo do Projeto:</label><br />
              <input type="text" class="format_input" />
            </div>
            <div>
              <label for="">Descrição:</label><br />
              <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                class="format_textearea"
              ></textarea>
            </div>
            <div class="col">
              <div class="row">
                <div>
                  <label for="">Custo:</label><br />
                  <input type="text" class="format_input" /><br />
                  <label for="">Duração do Projeto:</label><br />
                  <input type="text" class="format_input" />
                </div>
                <div class="inputfile_projeto">
                  <label for="foto"><img src="img\icones\foto.png"/></label>
                  <input id="foto" type="file" class="format_input" /><br />
                  <span>Anexar Foto</span>
                </div>
              </div>
            </div>
            <div class="btn_proj">
              <button class="format_btn">Adicionar</button>
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
