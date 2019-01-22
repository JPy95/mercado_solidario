<html lang="pt-br">
  <head>
    <!--HEAD -->
    <?php include_once('php\estruturas_base\head.php') ?>
    <link rel="stylesheet" type="text/css" href="css\produto.css">
  </head>
  <body>
    <!--NAV -->
    <?php include_once('php\estruturas_base\nav_principal.php') ?>
    <div id="produto">
        <div class="gourp_img_produto">
            <div class="gourp_img_pequeno_produto">
                <img src="img\img_prod\Luta2.jpg" class="img_pequeno_produto">
                <img src="img\img_prod\Luta2.jpg" class="img_pequeno_produto_meio">
                <img src="img\img_prod\Luta2.jpg" class="img_pequeno_produto">
            </div>
            <div class="img_principal_produto">
                <img src="img\img_prod\Luta2.jpg" class="style_img_principal_produto">
            </div>
        </div>
        <div id="dados_produto">
            <div class="gourp_titulo_produto">
                <div class="title_favorite">
                    <h4 class="titulo_produto">Titulo do Produto</h4>
                    <img src="img\icones\favorito.png" class="favorito_prod">
                </div>
                <div class="five_stars">
                    <img src="img\icones\stars.png" class="stars_prod">
                    <img src="img\icones\stars.png" class="stars_prod">
                    <img src="img\icones\stars.png" class="stars_prod">
                    <img src="img\icones\stars.png" class="stars_prod">
                    <img src="img\icones\stars.png" class="stars_prod">
                </div>
            </div>
            <div class="desc_valor_produto">
                <div>
                    <h3 class="valor_produto">R$ x.xxx,00</h3>
                    <img src="img\icones\cartoes.png" class="icones_pequeno_produto"><span class="desc_icones_produto">12x sem juros no valor de R$xxx,00</span>
                    <div class="gourp_cards_produto">
                        <img src="img\icones\visa.png" class="img_bandeira_card_porduto">
                        <img src="img\icones\master.png" class="img_bandeira_card_porduto">
                        <img src="img\icones\paypal.png" class="img_bandeira_card_porduto">
                    </div>
                </div>
                <div class="group_frete">
                    <img src="img\icones\frete.png" class="icones_pequeno_produto">
                    <div class="desc_frete">
                        <span class="desc_icones_produto">Frete: R$xx,00</span><br>
                        <span class="desc_icones_produto">Prazo de entrega: x dias</span>
                    </div>
                </div>
                <div class="qtde_prod">
                    <span class="text_qtde_prod">Quantidade: </span><input type="number" class="format_input_qtde">
                    <a href=""><button class="btn_format">Finalizar Compra</button></a>
                </div>
            </div>
        </div>
    </div>
    <div id="desc_prod">
        <div class="desc_prod">
            <h4 class="titulo_desc_produto">Descrição</h4>
            <p class="desc_perfil_inst">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum lectus id nunc mattis, 
                nec lacinia turpis ultrices. Quisque eros ipsum, fringilla sed sapien a, fermentum fermentum 
                elit. Aenean dapibus euismod nibh, vitae pellentesque sem maximus et. Donec ac velit egestas 
                tortor sagittis maximus nec ut metus. Etiam venenatis dolor ut tellus mollis, nec iaculis 
                lectus tempus. Vestibulum tempor urna mauris, efficitur sagittis urna finibus sed. Nullam 
                faucibus erat quis est vestibulum fermentum. Morbi tempus, tellus non dictum ultricies, 
                magna sapien placerat sapien, efficitur ornare quam turpis ut nunc. Phasellus in fermentum nunc. 
                Suspendisse ut accumsan dui. Duis auctor luctus varius.
            </p>
        </div>
        <div class="desc_vendedor">
            <div>
                <h4 class="titulo_desc_produto">Dados do Vendedor</h4>
            </div>
            <div class="info_vededor">
                <span class="nome_vendedor">Fulano de tal</span>
                <div class="five_stars">
                    <img src="img\icones\stars.png" class="stars_prod">
                    <img src="img\icones\stars.png" class="stars_prod">
                    <img src="img\icones\stars.png" class="stars_prod">
                    <img src="img\icones\stars.png" class="stars_prod">
                    <img src="img\icones\stars.png" class="stars_prod">
                </div>
                <div class="dados_vendedor">
                    Contato: <span class="desc_icones_produto">(31)1000-0000</span><br>
                    E-mail: <span class="desc_icones_produto">exemplo@exemplo.com</span><br>
                    Endereço: <span class="desc_icones_produto">Rua a, 142/203,bairro,cidade/uf - 10000-000</span>
                </div>
            </div>
        </div>
    </div>
   <!--Rodapé-->
   <?php include_once('php\estruturas_base\footer.php') ?>
  </body>
</html>