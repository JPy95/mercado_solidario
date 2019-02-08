<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php')?>
    </head>
    <body>
        <!--Modal-->
        <?php include_once('php\estruturas_base\modals\meus_dados.php');?>
        <?php include_once('php\estruturas_base\nav_principal.php')?>
        <div id="perfil">
            <?php include_once('php\estruturas_base\sidebar_menu.php')?>
            <div id="slide_perfil">
                <div class="title_slide">
                    <h1 class="style_title_slide style_title_pdt">Novo Anúncio</h1>
                </div>
                <div class="col-xl-12">
                    <div class="col-xl-12">
                        <label for="" class="subtitle_register style_subtitle">Titulo do Produto:</label><br>
                        <input type="text" class="format_input">
                    </div>
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-6">
                                <label for="" class="subtitle_register style_subtitle">Categoria:</label><br>
                                <select name="" id="" class="format_select">
                                    <option value="">Para sua Casa</option>
                                    <option value="">Esportivos</option>
                                    <option value="">Musica e Hobbies</option>
                                    <option value="">Artigos Infantis</option>
                                    <option value="">Eletrônicos</option>
                                    <option value="">Comércio e Escrtório</option>
                                    <option value="">Moda e Beleza</option>
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <label for="" class="subtitle_register style_subtitle">Tipo:</label><br>
                                <select name="" id="" class="format_select">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-4">
                                <label for="" class="subtitle_register style_subtitle">Valor do Produto:</label><br>
                                <input type="text" class="format_input">
                            </div>
                            <div class="col-xl-4">
                                <label for="" class="subtitle_register style_subtitle">% de Doacação:</label><br>
                                <input class="format_input_number" type="number" name="" id="" min="2" max="10">%
                            </div>
                            <div class="col-xl-4">
                                <label for="" class="subtitle_register style_subtitle">* Tipo de Anuncio:</label><br>
                                <select name="" id="" class="format_select">
                                    <option value="">Gratuito</option>
                                    <option value="">Exepresso</option>
                                    <option value="">Diamente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="">
                                    <label for="" class="subtitle_register">Descrição</label>
                                    <textarea name="" class="format_textearea" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-4 inputfile_inst">
                                <label for="foto" class="img_file"><img src="img\icones\foto.png"></label>
                                <input id="foto" type="file" class="format_input"><br>
                                <span>Anexar Imagnes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn_cad_inst">
                    <input class="format_btn" type="button" value="Cadastrar">
                </div>
            </div>
            <!--Score Solidarius-->
            <?php include_once('php\estruturas_base\solidario_score.php')?>
        </div>
        <?php include_once('php\estruturas_base\footer.php');?>
        <script type="text/javascript" src="js\progressbar.js"></script>
  </body>
</html>