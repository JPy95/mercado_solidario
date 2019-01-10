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
      <div id="silede_perfil_anuncio">
        <div class="title_slide">
          <h2 class="style_title_slide">Projetos - Instituição X</h2></div>
        <div id="slide_anuncio">
          <?php include_once('php\estruturas_base\card_anuncio.php')?>
        </div>
      </div>
      <?php include_once('php\estruturas_base\solidario_score.php')?>
    </div>
    <!--Rodapé-->
    <?php include_once('php\estruturas_base\footer.php') ?>
  </body>
</html>
