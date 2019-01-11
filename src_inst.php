<html lang="pt-br">
   <!--HEAD -->
   <head>
        <?php include_once('php\estruturas_base\head.php') ?>
        <script type="text/javascript" src="js\carrosel.js"></script>
        <link rel="stylesheet" type="text/css" href="css\carrosel.css">
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
        <div class="lista_inst_cat">
            <div class="border_bottom_src_inst">
                <h4 class="style_subtitle_slide">Causa 1</h4>
            </div>
            <div class="desc_proj_inst">
                <ul id="elementos" class="carrosel_ul">
                    <li class="carrosel_li"><?php include_once('php\estruturas_base\card_inst.php')?></li>
                    <li class="carrosel_li"><?php include_once('php\estruturas_base\card_inst.php')?></li>
                    <li class="carrosel_li"><?php include_once('php\estruturas_base\card_inst.php')?></li>
                    <li class="carrosel_li"><?php include_once('php\estruturas_base\card_inst.php')?></li>
                </ul>
                <a class="carrosel_a" href="#elementos" onClick="mover(-1);" style="opacity: 0;">&lt; Voltar </a>
                <a class="carrosel_a" href="#elementos" onClick="mover(1);">Avançar &gt;</a>
            </div>
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php') ?>
    </body>
</html>