<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php')?>
    </head>
    <body>
        <?php include_once('php\estruturas_base\nav_principal.php')?>
        <img src="img\banners\banner1.jpg" class="banner">
        <div class="register_banner">
            <h2>Cadastro de Usuário</h2>
        </div>
        <form action="">
            <div id="register">
                <div class="register_btn_gourp">
                    <span>
                        <button class="resgiter_btn_pf">Pessoa Física</button>
                        <button class="register_btn_inst">Instituições</button>
                    </span>
                </div>
                <div id="register_form">
                    <div class="register_titulo">
                        <h4>Dados Cadastrais</h4>
                    </div>
                    <div class="cadastro">
                        <div>
                            <label for="">Nome/Razão Social:</label><br>
                            <input type="text" class="format_input"><br>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="" >CPF/CNPJ:</label><br>
                                <input type="text" class="format_input">
                            </div>
                            <div class="col-6">
                                <label for="">E-mail:</label><br>
                                <input type="text" class="format_input">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="">Senha:</label><br>
                                <input type="text" class="format_input">
                            </div>
                            <div class="col-6">
                                <label for="">Confirma Senha:</label><br>
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
                                <div class="col-9">
                                    <label for="">Logradouro:</label><br>
                                    <input type="text" class="format_input"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="">Número:</label><br>
                                    <input type="text" class="format_input"><br>
                                </div>
                                <div class="col-3">
        
                                    <label for="">Compl.:</label><br>
                                    <input type="text" class="format_input"><br>
                                </div>
                                <div class="col-6">
                                    <label for="">Bairro:</label><br>
                                    <input type="text" class="format_input"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="">Cidade:</label><br>
                                    <input type="text" class="format_input"><br>
                                </div>
                                <div class="col-2">
                                    <label for="">UF:</label><br>
                                    <input type="text" class="format_input"><br>
                                </div>
                            </div>
                            <div class="">
                                <label for="">Descrição</label>
                                <textarea name="" class="format_textearea" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="btn_cad">
                        <input class="format_btn" type="button" value="Cadastrar">
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
    </body>
</html>