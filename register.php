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
        <form name="register" action="php\objetos\_register.php" method="post">
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
                                <div class="row">
                                    <div class="col-xl-11 cadastro">
                                        <div class="col-xl-12">
                                            <div class="">
                                                <label for="tipo_pessoa" id="lblPessoa" class="subtitle_register">Tipo de Pessoa:</label><br>
                                                <select name="pessoa" id="tipo_pessoa" class="format_select_tipo_pessoa" onmouseout="alteraNome()">
                                                    <option value="fisica" class="format_option_tipo_pessoa">Pessoa Física</option>
                                                    <option value="juridica" class="format_option_tipo_pessoa">Pessoa Jurídica</option>
                                                    <option value="instituicao" class="format_option_tipo_pessoa">Instituição</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="nome" id="lblNome" class="subtitle_register">Nome:</label><br>
                                                <input onblur="valida_nome()" type="text" class="format_input" id="nome" name="nome" maxlength="200"><br>
                                                <p id="erro-nome" class="erro_form"></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label for="cpf" id="lblCpf" class="subtitle_register">CPF:</label><br>
                                                    <input id="cpf" name="cpf" type="text" onkeydown="fMasc( this, mCPF )" onblur="valida_cpf()" class="form-control input_format_cpf_cnpj" aria-describedby="basic-addon1">
                                                    <p id="erro-cpf" class="erro_form"></p>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="email" class="subtitle_register">E-mail:</label><br>
                                                    <input onblur="valida_email()" type="email" class="format_input" id="email" name="email" maxlength="100">
                                                    <p id="erro-email" class="erro_form"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <label for="pass" class="subtitle_register">Senha:</label><br>
                                                    <input onblur="valida_pass()" type="password" class="format_input" id="pass" name="pass" data-toggle="tooltip" data-placement="bottom" title="A senha deverá conter no mínimo 8 digitos.">
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
                                                            <label for="fantasia" class="subtitle_register">Nome Fantasia:</label>
                                                            <input type="text" class="format_input" id="fantasia" name="fantasia" maxlength="100"><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <label for="cep" class="subtitle_register">CEP:</label><br>
                                                            <input type="text" class="format_input" id="cep" name="cep" onblur="pesquisacep(this.value);"><br>
                                                            <p id="erro-cep" class="erro_form"></p>
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
                                                            <input type="text" class="format_input" id="num" name="num" maxlength="5"><br>
                                                        </div>
                                                        <div class="col-xl-3">
                                
                                                            <label for="compl" class="subtitle_register">Compl.:</label><br>
                                                            <input type="text" class="format_input" id="compl" name="compl"><br>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="bairro" class="subtitle_register">Bairro:</label><br>
                                                            <input type="text" class="format_input" id="bairro" name="bairro" maxlength="50"><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <label for="cidade" class="subtitle_register">Cidade:</label><br>
                                                            <input type="text" class="format_input" id="cidade" name="cidade" maxlength="50"><br>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <label for="uf" class="subtitle_register">UF:</label><br>
                                                            <input type="text" class="format_input" id="uf" name="uf"><br>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <label for="causa" class="subtitle_register">Causa:</label>
                                                            <select name="causa" id="causa" class="format_select">
                                                                <option value="0" class="">Qual a Causa Social:</option>
                                                                <option value="1" class="">Saúde</option>
                                                                <option value="2" class="">Crianças</option>
                                                                <option value="3" class="">Combate à fome e à pobreza</option>
                                                                <option value="4" class="">Idosos</option>
                                                                <option value="5" class="">Situações emergenciais</option>
                                                                <option value="6" class="">Educação</option>
                                                                <option value="7" class="">Moradia</option>
                                                                <option value="8" class="">Deficiente físico</option>
                                                                <option value="9" class="">Geração de Trabalho e renda</option>
                                                                <option value="10" class="">Abandono e maus tratos de animais</option>
                                                                <option value="11" class="">Dependência química</option>
                                                                <option value="12" class="">Meio ambiente</option>
                                                                <option value="13" class="">Deficiente mental</option>
                                                                <option value="14" class="">Morador de rua</option>
                                                                <option value="15" class="">Outros</option>
                                                            </select>
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
                                            <input onclick="valida_form()" class="format_btn" type="submit" value="Cadastrar" accesskey="enter">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php include_once('php\estruturas_base\footer.php')?>
        <script type="text/javascript" src="js\validacao_resgister.js"></script>
        <script type="text/javascript" src="js\cep.js"></script>
    </body>
</html>