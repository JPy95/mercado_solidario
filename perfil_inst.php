<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php') ?>
        <link rel="stylesheet" type="text/css" href="css\cards.css">
        <link rel="stylesheet" type="text/css" href="css\modals.css">
    </head>
    <body>
        <!--NAV -->
        <?php include_once('php\estruturas_base\modals\desc_projeto.php')?>
        <?php include_once('php\estruturas_base\nav_principal.php') ?>
        <div id="perfil">
            <div id="presentation_inst">
                <div class="title_slide ">
                    <h1 class="style_title_slide ">Instituição X</h1>
                    <div>
                        <span class="text_perfil_inst border_top_inst">
                            Este perfil será visualizado por todos os usuários do nosso site. 
                            Capriche no texto de apresentação e lembre-se, sempre mantenha o seu perfil atualizado.
                        </span>
                    </div>
                </div>
                <div class="dados_cad_inst_perfil">
                    <div class="format_img">
                        <img src="img\img_prod\baleia.png" class="img_perfil_inst">
                    </div>
                    <div class="dados_perfil_inst">
                        <div>
                            <h4 class="style_subtitle_slide subtitle_slide">Dados da Instituição</h4>
                        </div>
                        <div class="desc_perfil_inst">
                            <span class="title_desc_perfil_inst">CNPJ:</span> 10.100.100/0001-01<br>
                            <span class="title_desc_perfil_inst">Endereço:</span> Rua a, 125, Bairro, Cidade/UF - CEP: 10000-000<br>
                            <span class="title_desc_perfil_inst">E-mail:</span> exemplo@exemplo.com<br>
                            <span class="title_desc_perfil_inst">Site:</span> www.minhainstituicao.com.br
                        </div>
                    </div>
                </div>
                <div class="dados_cad_inst_perfil desc_inst_perfil">
                    <div>
                        <h4 class="style_subtitle_slide subtitle_slide">Descrição</h4>
                    </div>
                    <div class="desc_perfil_inst">
                        <p>
                            It is a long established fact that a reader will be distracted by the readable 
                            content of a page when looking at its layout. The point of using Lorem Ipsum is 
                            that it has a more-or-less normal distribution of letters, as opposed to using 
                            'Content here, content here', making it look like readable English. Many desktop 
                            publishing packages and web page editors now use Lorem Ipsum as their default model 
                            text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. 
                            Various versions have evolved over the years, sometimes by accident, sometimes on purpose 
                            (injected humour and the like).
                        </p>
                    </div>
                </div>
                <div class="desc_projetos_inst">
                    <div>
                        <h4 class="style_subtitle_slide subtitle_slide">Projetos Ativos</h4>
                    </div>
                    <?php include_once('php\estruturas_base\card_projeto.php')?>
                </div>
            </div>
        </div>
        <?php include_once('php\estruturas_base\footer.php')?>
    </body>
</html>