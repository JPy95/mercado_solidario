<html lang="pt-br">
<head>
    <?php include_once('php\estruturas_base\head.php') ?>
    <script type="text/javascript" src="js\progressbar.js"></script>
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
        <div id="dados_inst">
            <div>
                <h1 class="title_perfil_inst">Seu Perfil - Instituição X</h1>
            </div>
            <div class="img_perfil_inst">
                <img src="img\img_prod\baleia.png" class="img_style_perfil_inst">
            </div>
            <span class="text_perfil_inst">Este perfil será visualizado por todos os usuários do nosso site. Capriche no texto de apresentação e lembre-se, sempre mantenha o seu perfil atualizado.
                <a href="edit_perfil_inst.html" class="link_perfil_inst">Editar Perfil</a></span>
            <div id="dados_perfil_inst">
                <div class="dados_perfil_inst">
                    <div>
                        <h4 class="subtitle_perfil_inst">Dados da Instituição</h4>
                    </div>
                    <div class="desc_perfil_inst">
                        <span class="title_desc_perfil_inst">CNPJ:</span> 10.100.100/0001-01<br>
                        <span class="title_desc_perfil_inst">Endereço:</span> Rua a, 125, Bairro, Cidade/UF - CEP: 10000-000<br>
                        <span class="title_desc_perfil_inst">E-mail:</span> exemplo@exemplo.com<br>
                        <span class="title_desc_perfil_inst">Site:</span> www.minhainstituicao.com.br
                    </div>
                </div>
                <div class="dados_perfil_inst">
                    <div>
                        <h4 class="subtitle_perfil_inst">Descrição</h4>
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
                <div class="dados_perfil_inst">
                    <div>
                        <h4 class="subtitle_perfil_inst">Projetos Ativos</h4>
                    </div>
                    <div class="cards_projt_perfil_inst">
                        <div class="desc_proj_inst">
                            <div class="card_proj_inst">
                                <div class="borda_img_card">
                                    <img src="img\img_prod\africa.jpg" class="img_card_projt_perfil_inst">
                                </div>
                                <div class="desc_projt_card_prfil_inst">
                                    <h5>Titulo do Projeto</h5>
                                </div>
                                <div >
                                    <button class="btn_cards">Saiba Mais</button>
                                </div>
                            </div>
                        </div>
                        <div class="desc_proj_inst">
                            <div class="card_proj_inst">
                                <div class="borda_img_card">
                                    <img src="img\img_prod\africa.jpg" class="img_card_projt_perfil_inst">
                                </div>
                                <div class="desc_projt_card_prfil_inst">
                                    <h5>Titulo do Projeto</h5>
                                </div>
                                <div >
                                    <button class="btn_cards">Saiba Mais</button>
                                </div>
                            </div>
                        </div>
                        <div class="desc_proj_inst">
                            <div class="card_proj_inst">
                                <div class="borda_img_card">
                                    <img src="img\img_prod\africa.jpg" class="img_card_projt_perfil_inst">
                                </div>
                                <div class="desc_projt_card_prfil_inst">
                                    <h5>Titulo do Projeto</h5>
                                </div>
                                <div >
                                    <button class="btn_cards">Saiba Mais</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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