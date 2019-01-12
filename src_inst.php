<html lang="pt-br">
   <!--HEAD -->
   <head>
        <?php include_once('php\estruturas_base\head.php') ?>
        <script type="text/javascript" src="js\carrosel.js"></script>
        <link rel="stylesheet" type="text/css" href="css\carrosel.css">
    </head>
    <body onload="valida_tamanho()">
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
            <div  class="card_inst_group">
                <!--Voltar-->
                <button class="btn_carousel btn_previous" onClick="mover(-1);" style="opacity: 0;"></button>
                <!--Cards-->
                <ul id="elementos" class="carrosel_ul">
                    <li class="carrosel_li">
                        <div class="card_proj_inst">
                            <div class="borda_img_card">
                                <img src="img\img_prod\baleia.png" class="img_card_aprest_perfil_inst">
                            </div>
                            <div class="desc_projt_card_prfil_inst">
                                <h5>Nome Fantasia1</h5>
                            </div>
                            <div >
                                <button class="btn_cards">Saiba Mais</button>
                            </div>
                        </div>
                    </li>
                    <li class="carrosel_li">
                        <div class="card_proj_inst">
                            <div class="borda_img_card">
                                <img src="img\img_prod\baleia.png" class="img_card_aprest_perfil_inst">
                            </div>
                            <div class="desc_projt_card_prfil_inst">
                                <h5>Nome Fantasia2</h5>
                            </div>
                            <div >
                                <button class="btn_cards">Saiba Mais</button>
                            </div>
                        </div>
                    </li>
                    <li class="carrosel_li">
                        <div class="card_proj_inst">
                            <div class="borda_img_card">
                                <img src="img\img_prod\baleia.png" class="img_card_aprest_perfil_inst">
                            </div>
                            <div class="desc_projt_card_prfil_inst">
                                <h5>Nome Fantasia3</h5>
                            </div>
                            <div >
                                <button class="btn_cards">Saiba Mais</button>
                            </div>
                        </div>
                    </li>
                    <li class="carrosel_li">
                        <div class="card_proj_inst">
                            <div class="borda_img_card">
                                <img src="img\img_prod\baleia.png" class="img_card_aprest_perfil_inst">
                            </div>
                            <div class="desc_projt_card_prfil_inst">
                                <h5>Nome Fantasia4</h5>
                            </div>
                            <div >
                                <button class="btn_cards">Saiba Mais</button>
                            </div>
                        </div>
                    </li>
                    <li class="carrosel_li">
                        <div class="card_proj_inst">
                            <div class="borda_img_card">
                                <img src="img\img_prod\baleia.png" class="img_card_aprest_perfil_inst">
                            </div>
                            <div class="desc_projt_card_prfil_inst">
                                <h5>Nome Fantasia5</h5>
                            </div>
                            <div >
                                <button class="btn_cards">Saiba Mais</button>
                            </div>
                        </div>
                    </li>
                </ul>
                <!--Fim Cards-->
                <!--Avançar-->
                <button class="btn_carousel btn_next" onClick="mover(1);"></button>
            </div>
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php') ?>
    </body>
</html>