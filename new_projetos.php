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
          <h2 class="style_title_slide">Adicionar Novo Projeto</h2>
        </div>
        <div id="slide">
          <div id="register_form_projeto">
            <div>
              <label for="">Titulo do Projeto:</label><br />
              <input type="text" class="format_input" />
            </div>
            <div>
              <label for="">Descrição:</label><br />
              <textarea name="" id="" cols="30" rows="10" class="format_textearea"></textarea>
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
      <?php include_once('php\estruturas_base\solidario_score.php')?>
    </div>
    <!--Rodapé-->
    <?php include_once('php\estruturas_base\footer.php') ?>
  </body>
</html>
