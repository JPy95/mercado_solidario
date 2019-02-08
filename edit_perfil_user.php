<html lang="pt-br">
    <head>
        <!--HEAD -->
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
                    <h2 class="style_title_slide">Editar Perfil</h2>
                </div>
                <div id="register_form_edit_inst">
                    <div class="register_titulo">
                        <h4 class="subtitle_form">Dados Cadastrais</h4>
                    </div>
                    <div class="cadastro">
                        <div>
                            <label for="" class="subtitle_register">Razão Social:</label><br>
                            <input type="text" class="format_input"><br>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="subtitle_register">Telefone:</label><br>
                                <input type="text" class="format_input">
                            </div>
                            <div class="col-6">
                                <label for="" class="subtitle_register">E-mail:</label><br>
                                <input type="text" class="format_input">
                            </div>
                        </div>
                    </div>
                    <div class="register_titulo">
                        <h4 class="subtitle_form">Queremos saber mais sobre a sua Instituição</h4>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col-7">
                                <label for="" class="subtitle_register">Website:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-5 formart_input_cel">
                                <label for="" class="subtitle_register">Causa:</label>
                                <select name="" class="format_select">
                                    <option value="" class="">Qual a Causa Social:</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 formart_input_cel_right">
                                <label for="" class="subtitle_register">CEP:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-7">
                                <label for="" class="subtitle_register">Logradouro:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-2 formart_input_cel">
                                <label for="" >Num.:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="" class="subtitle_register">Compl.:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-4 formart_input_cel">
                                <label for="" class="subtitle_register">Bairro:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-3">
                                <label for="" class="subtitle_register">Cidade:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-2 formart_input_cel">
                                <label for="" class="subtitle_register">UF:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="">
                                    <label for="" class="subtitle_register">Descrição</label>
                                    <textarea name="" class="format_textearea" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-4 inputfile_inst">
                                <label for="foto"><img src="img\icones\foto.png"></label>
                                <input id="foto" type="file" class="format_input"><br>
                                <span>Anexar Foto</span>
                            </div>
                        </div>
                    </div>
                    <div class="btn_cad_inst">
                        <input class="format_btn" type="button" value="Cadastrar">
                    </div>
                </div>
            </div>
            <?php include_once('php\estruturas_base\solidario_score.php')?>
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php') ?>
    </body>
</html>