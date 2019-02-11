<html lang="pt-br">
    <head>
        <!--HEAD -->
        <?php include_once('php\estruturas_base\head.php') ?>
        <script type="text/javascript" src="js\progressbar.js"></script>
    </head>
    <body>
        <!--NAV -->
        <?php include_once('php\estruturas_base\nav_principal.php') ?>
        <?php include_once('php\estruturas_base\modals\editar_dados_cadastrais.php')?>
        <?php include_once('php\estruturas_base\modals\add_endereco.php')?>
        <?php include_once('php\estruturas_base\modals\add_cartao.php')?>
        <div id="perfil">
            <?php include_once('php\estruturas_base\sidebar_menu.php')?>
            <div id="slide_perfil" style="width: 45%">
                <h1 class="style_title_slide" style="margin-left: 30px; font-style: italic">Editar Perfil</h1>
                <div class="col-12">
                    <div style="border-bottom: 1px solid rgba(128, 128, 128, 0.28);">
                        <span class="subtitle_form_edit_perfil">Dados Cadastrais 
                            <button class="modal_edit_perfil" type="button" data-toggle="modal" data-target="#modalEditDadosCadastrais">
                                <a class="link_edit_perfil">Editar dados</a>
                            </button>
                        </span>
                    </div>
                    <div class="desc_edit_perfil">
                        <span>Id Usuario: <label class="descricao_anun_valor">3123</label></span><br>
                        <span>Nome: <label class="descricao_anun_valor">Fulano</label></span><br>
                        <span>Tipo Pessoa: <label class="descricao_anun_valor">FISICA</label></span><br>
                        <span>CPF/CNPJ: <label class="descricao_anun_valor">XXX.XXX.XXX-XX</label></span><br>
                        <span>E-mail: <label class="descricao_anun_valor">exemplo@exemplo.com</label></span><br>
                        
                    </div>
                </div>
                <div class="col-12">
                    <div style="border-bottom: 1px solid rgba(128, 128, 128, 0.28);">
                        <span class="subtitle_form_edit_perfil">Endereços 
                            <button class="modal_edit_perfil" type="button" data-toggle="modal" data-target="#modalAddEndereco">
                                <a class="link_edit_perfil">Editar dados</a>
                            </button>
                        </span>
                    </div>
                    <div class="desc_edit_perfil">
                        <span>1- <label class="descricao_anun_valor">Rua a, 1231, compl., bairro, cidade, uf</label></span><br>
                        <span>2- <label class="descricao_anun_valor">Rua a, 1231, compl., bairro, cidade, uf</label></span><br>
                        <span>3- <label class="descricao_anun_valor">Rua a, 1231, compl., bairro, cidade, uf</label></span><br>
                    </div>
                </div>
                <div class="col-12">
                    <div style="border-bottom: 1px solid rgba(128, 128, 128, 0.28);">
                        <span class="subtitle_form_edit_perfil">Cartões 
                            <button class="modal_edit_perfil" type="button" data-toggle="modal" data-target="#modalAddCartao">
                                <a class="link_edit_perfil">Editar dados</a>
                            </button>
                        </span>
                    </div>
                    <div class="desc_edit_perfil">
                        <span>1- <label class="descricao_anun_valor">1231xxxx31231</label></span><br>
                        <span>2- <label class="descricao_anun_valor">1231xxxx31231</label></span><br>
                        <span>3- <label class="descricao_anun_valor">1231xxxx31231</label></span><br>
                    </div>
                </div>
            </div>
            <?php include_once('php\estruturas_base\solidario_score.php')?>
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php') ?>
    </body>
</html>