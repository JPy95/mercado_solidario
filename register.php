<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php') ?>
    </head>
    <body>
        <?php include_once('php\estruturas_base\nav_principal.php') ?>
        <img src="img\banners\banner1.jpg" class="banner">
        <div class="register_banner">
            <h2>Cadastro de Usuário</h2>
        </div>
        <!--Formulario de Registro de Usuário (Cliente e Instituições)-->
        <form name="register" action="php\formularios\_register.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-8" id="register">
                        <div class="row">
                            <!--Botão Collapse para abertura de formulario de Instituições-->
                            <div class="col-12 register_btn_pf_inst">
                                <span>
                                    <button id="btnInst" class="register_btn_inst" onclick="alterarNome()" type="button" data-toggle="collapse"  data-target="#form_inst" aria-expanded="false" aria-controls="form_inst">Instituições</button>
                                </span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div id="register_form" class="col-xl-12">
                                <div class="title_register">
                                    <h4 class="style_title_register">Dados Cadastrais</h4>
                                </div>
                                <!--Dados Obrigatorios (Dados Cadastrais)-->
                                    <div class="col-xl-12">
                                        <label for="nome" id="lblNome" class="subtitle_register">Nome:</label><br>
                                        <input onblur="valida_nome()" type="text" class="format_input" id="nome" name="nome"><br>
                                        <p id="erro-nome" class="erro_form"></p>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label for="" class="subtitle_register">CPF/CNPJ:</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button id="btn-cpf" class="btn btn-outline-secondary btn_format_cpf_cnpj btn_style_cpf_cnpj" type="button"><label class="text_style_cpf_cnpj">CPF</label></button>
                                                        <button id="btn-cnpj" class="btn btn-outline-secondary btn_style_cpf_cnpj" style="height: 35px;" type="button"><label class="text_style_cpf_cnpj">CNPJ</label></button>
                                                    </div>
                                                    <input id="cpf" type="text" onkeydown="fMasc( this, mCPF )" onblur="valida_cpf()" class="form-control input_format_cpf_cnpj" aria-describedby="basic-addon1">
                                                </div>
                                                <p id="erro-cpf" class="erro_form"></p>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="email" class="subtitle_register">E-mail:</label><br>
                                                <input onblur="valida_email()" type="email" class="format_input" id="email" name="email">
                                                <p id="erro-email" class="erro_form"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <label for="pass" class="subtitle_register">Senha:</label><br>
                                                <input onblur="valida_pass()" type="password" class="format_input" id="pass" name="pass">
                                                <p id="erro-pass" class="erro_form"></p>
                                            </div>
                                            <div class="col-xl-4">
                                                <label for="confirma_pass" class="subtitle_register">Confirma Senha:</label><br>
                                                <input onblur="valida_check_pass()" type="password" class="format_input" name="confirma_pass" id="confirma_pass">
                                                <p id="erro-confirma_pass" class="erro_form"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Dados NÃO Obrigatorios (Dados das Instituições)
                                    *Este fomulário poderá ser alterado na edição de perfil na pagina meu perfil de insituições-->
                                <div class="collapse" id="form_inst">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="title_register">
                                                <h4 class="style_title_register">Queremos saber mais sobre a sua Instituição</h4>
                                            </div>
                                            <div class="col-xl-11 cadastro">
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-xl-7">
                                                            <label for="site" class="subtitle_register">Website:</label><br>
                                                            <input type="text" class="format_input" id="site" name="site"><br>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <label for="causa" class="subtitle_register">Causa:</label>
                                                            <select name="causa" id="causa" class="format_select">
                                                                <option value="" class="">Qual a Causa Social:</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <label for="cep" class="subtitle_register">CEP:</label><br>
                                                            <input type="text" class="format_input" id="cep" name="cep"><br>
                                                        </div>
                                                        <div class="col-xl-9">
                                                            <label for="log" class="subtitle_register">Logradouro:</label><br>
                                                            <input type="text" class="format_input" id="log" name="log"><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <label for="num" class="subtitle_register">Número:</label><br>
                                                            <input type="text" class="format_input" id="num" name="num"><br>
                                                        </div>
                                                        <div class="col-xl-3">
                                
                                                            <label for="compl" class="subtitle_register">Compl.:</label><br>
                                                            <input type="text" class="format_input" id="compl" name="compl"><br>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="bairro" class="subtitle_register">Bairro:</label><br>
                                                            <input type="text" class="format_input" id="bairro" name="bairro"><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <label for="cidade" class="subtitle_register">Cidade:</label><br>
                                                            <input type="text" class="format_input" id="cidade" name="cidade"><br>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <label for="uf" class="subtitle_register">UF:</label><br>
                                                            <input type="text" class="format_input" id="uf" name="uf"><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <label for="desc" class="subtitle_register">Descrição</label>
                                                            <textarea id="desc" name="desc" class="format_textearea" cols="30" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <!--Botão de submissão de dados ao banco de dados.
                                            *Acionado por um validador JS.-->
                                        <div class="btn_cad">
                                            <input onclick="valida_form()" class="format_btn" type="button" value="Cadastrar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <footer class="footer">
            <div class="footer_menu">
                <div class="footer_list">
                    <h5>Mercado Solidário</h5><br>
                    <a href="" class="footer_link">Quem somos</a><br>
                    <a href="" class="footer_link">Politica de Privacidade</a><br>
                    <a href="" class="footer_link">Politica de Troca</a>
                </div>
                <div class="footer_list">
                    <h5>Instituições</h5><br>
                    <a href="" class="footer_link">Cadastre-se</a><br>
                    <a href="" class="footer_link">Pesquisar</a>
                </div>
                <div class="footer_list">
                    <h5>Forma de Pagamento</h5><br>
                    <span><img src="img\icones\master.png"><img src="img\icones\visa.png"><img src="img\icones\paypal.png"></span><br>
                    <span><img src="img\icones\boleto.png"></span><br>
                    <h5>Compra Segura</h5>
                    <span><img src="img\icones\cadeado.png" class="img_pgto"></span>
                </div>
                <div class="footer_list">
                    <h5>Empresas Parceiras</h5><br>
                    <span>
                    </span>
                </div>
            </div>
        </footer>
        <div class="mercado">
            <span>
                <h6 class="texto_mercado">Quando ajudamos o proximo, estamos plantando o bem para podermos colher um mundo melhor! Todos os direitos reservados.</h6>
            </span>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js\validacao_resgister.js"></script>
    </body>
</html>