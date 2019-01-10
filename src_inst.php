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
        <div id="busca_inst">
            <div class="title_busca_inst">
                <h1 class="title_perfil_inst">Conheça a Instituição que deseja ajudar</h1>
            </div>
            <div class="format_inputs_busca_inst">
                <input type="search" class="input_buscar_inst">
                <div class="format_select_busca_inst">
                    <select name="" id="" >
                        <option value="">Causas</option>
                        <option value="">Causas</option>
                        <option value="">Causas</option>
                        <option value="">Causas</option>
                    </select>
                </div>
                <div class="format_select_busca_inst">
                    <select name="" id="">
                        <option value="">Cidades</option>
                        <option value="">Cidades</option>
                        <option value="">Cidades</option>
                        <option value="">Cidades</option>
                    </select>
                </div>
            </div>
        </div>    
        <div class="lista_inst_cat">
            <div>
                <h4 class="subtitle_perfil_inst">Saúde</h4>
            </div>

            <div>
                <div class="desc_proj_inst">
                    <div class="card_proj_inst">
                        <div class="borda_img_card">
                            <img src="img\img_prod\baleia.png" class="img_card_aprest_perfil_inst">
                        </div>
                        <div class="desc_projt_card_prfil_inst">
                            <h5>Nome Fantasia</h5>
                        </div>
                        <div >
                            <button class="btn_cards">Saiba Mais</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php') ?>
    </body>
</html>