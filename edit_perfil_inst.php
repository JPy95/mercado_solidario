<html lang="pt-br">
  <head>
     <!--HEAD -->
     <?php include_once('php\estruturas_base\head.php') ?>
  </head>
  <body>
    <!--NAV -->
    <?php include_once('php\estruturas_base\nav_principal.php') ?>
    <div id="perfil">
        <div id="sidebar_perfil">
            <div class="sidebar_titulo">
                <img src="img\icones\menu.png" class="sidebar_img"><span class="sidebar_perfil">Meu Perfil</span>
            </div>
            <div class="sidebar_item_group">
                <div class="sidebar_menu">
                    <img src="img\icones\dash.png" class="sidebar_img">
                       <a href="perfil_inst.html" class="btn_sidebar"><span>Dashboard</span></a> 
                </div>
                <div class="sidebar_menu">
                    <img src="img\icones\projetos.png" class="sidebar_img">
                    <a href="new_projetos.html" class="btn_sidebar"><span class="">Projetos</span></a> 
                </div>
            </div>
        </div>
        <div id="slide_perfil">
            <div class="titulo_slide">
                <h2>Editar Perfil - Instituição X</h2>
            </div>
            <div id="register_form_edit_inst">
                <div class="register_titulo">
                    <h4>Dados Cadastrais</h4>
                </div>
                <div class="cadastro">
                    <div>
                        <label for="">Razão Social:</label><br>
                        <input type="text" class="format_input"><br>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="" >Telefone:</label><br>
                            <input type="text" class="format_input">
                        </div>
                        <div class="col-6">
                            <label for="">E-mail:</label><br>
                            <input type="text" class="format_input">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="register_titulo">
                        <h4>Queremos saber mais sobre a sua Instituição</h4>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-7">
                                <label for="">Website:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-5">
                                <label for="">Causa:</label>
                                <select name="" class="format_select">
                                    <option value="" class="">Qual a Causa Social:</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="">CEP:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-7">
                                <label for="">Logradouro:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-2">
                                <label for="">Número:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="">Compl.:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-4">
                                <label for="">Bairro:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-3">
                                <label for="">Cidade:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                            <div class="col-2">
                                <label for="">UF:</label><br>
                                <input type="text" class="format_input"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="">
                                    <label for="">Descrição</label>
                                    <textarea name="" class="format_textearea" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-4 inputfile_inst">
                                <label for="foto" ><img src="img\icones\foto.png"></label>
                                <input id="foto" type="file" class="format_input"><br>
                                <span>Anexar Foto</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn_cad">
                    <input class="format_btn" type="button" value="Cadastrar">
                </div>
            </div>
        </div>
        <div id="star_perfil">
            <div class="score_title">
                <h3>Popularidade</h3>
            </div>
            <div class="score_perfil">
                <div class="score">
                    <svg height="150" width="150">
                        <circle cx="75" cy="75" r="70" stroke="rgba(128, 128, 128, 0.2)" stroke-width="1" fill="rgba(128, 128, 128, 0.48)"></circle>
                        <circle cx="75" cy="75" r="57" stroke="rgba(128, 128, 128, 0.2)" stroke-width="1" fill="rgb(232, 250, 255)"></circle>
                    </svg>
                </div>
                <div class="text_score">
                    <span class="lvl_score">Nivel X</span><br>
                    <span class="lvl_title">Titulo do nivel</span><br>
                    <span class="lvl_point">Quantidade total de ponto (ex.:0/1000)</span>
                </div>
            </div>
        </div>
    </div>
    <!--Rodapé-->
   <?php include_once('php\estruturas_base\footer.php') ?>
</html>