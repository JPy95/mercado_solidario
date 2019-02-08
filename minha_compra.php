<html lang="pt-br">
  <!--HEAD -->
  <head>
    <?php include_once('php\estruturas_base\head.php') ?>
    <script type="text/javascript" src="js\progressbar.js"></script>
  </head>
  <body>
    <!--Modal-->
    <?php include_once('php\estruturas_base\modals\meus_dados.php');?>
    <!--NAV -->
    <?php include_once('php\estruturas_base\nav_principal.php') ?>
    <div id="perfil">
      <?php include_once('php\estruturas_base\sidebar_menu.php')?>
      <div id="silede_perfil_anuncio">
        <div class="title_slide">
          <h2 class="style_title_slide">Minhas Compras</h2></div>
        <div id="slide_compra">
          <?php include_once('php\estruturas_base\card_compras.php')?>
        </div>
      </div>
      <?php include_once('php\estruturas_base\solidario_score.php')?>
    </div>
    <!--Rodapé-->
    <?php include_once('php\estruturas_base\footer.php') ?>
  </body>
</html>
