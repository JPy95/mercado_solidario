<html lang="pt-br">
   <!--HEAD -->
   <head>
        <?php include_once('php\estruturas_base\head.php') ?>
        <link rel="stylesheet" type="text/css" href="css\carrosel.css">
        <link rel="stylesheet" type="text/css" href="css\cards.css">
    </head>
    <body>
        <!--NAV -->
        <?php include_once('php\estruturas_base\nav_principal.php') ?>
         <div id="busca_inst">
            <div class="style_title_slide">
                <h1 class="title_perfil_inst">Conheça a Instituição que deseja ajudar</h1>
            </div>
            <div class="format_buscar_inst">
                <form action="">
                    <div>
                        <input class="format_input_src_inst" type="search" name="" id="" placeholder="Pesquise por causa...">
                        <input class="format_btn_src_inst" type="submit" value="Procurar">
                    </div>
                </form>
            </div>
            <div class="format_buscar_inst">
                <div class="dropdown">
                    <button class="btn_src_inst btn btn-secondary dropdown-toggle" type="button" id="causas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Causas</span> 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="causas">
                        <a class="dropdown-item" href="?causa1">Causa 1</a>
                        <a class="dropdown-item" href="?causa2">Causa 2</a>
                        <a class="dropdown-item" href="?causa3">Causa 3</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn_src_inst btn btn-secondary dropdown-toggle" type="button" id="cidades" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Cidades</span> 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="cidades">
                        <a class="dropdown-item" href="?cidade1">Cidade 1</a>
                        <a class="dropdown-item" href="?cidade2">Cidade 2</a>
                        <a class="dropdown-item" href="?cidade3">Cidade 3</a>
                    </div>
                </div>
            </div>
        </div> 
        <?php include_once('php\estruturas_base\carousel_inst.php')?>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php') ?>
        <script type="text/javascript" src="js\carrosel.js"></script>
    </body>
</html>