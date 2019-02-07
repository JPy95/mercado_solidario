<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php') ?>
        <link rel="stylesheet" type="text/css" href="css\carrinho.css">
    </head>
    <body>
        <nav>
            <?php include_once('php\estruturas_base\nav_principal.php') ?>
        </nav>
        <div class="container">
            <div class="title_carrinho">
                <h1>Carrinho</h1>
            </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-7 produtos">
                        <div class="subtitle_carrinho">
                            <h3>Produtos:</h3>
                        </div>
                        <?php include_once('php\estruturas_base\card_produto.php'); ?>
                    </div>
                    <div class="col-xl-5 resumo">
                        <div class="subtitle_carrinho">
                            <h3>Resumo: </h3>
                        </div>
                        <div>
                            <label class="desc_carrinho">Quantidade de produtos:</label><span class="descricao_anun_valor"> xxxx</span><br>
                            <label class="desc_carrinho">Valor Total:</label><span class="descricao_anun_valor"> R$xxxx</span><br>
                        </div>
                        <div class="btn_carrinho">
                            <a href="compra.php"><button>Finalizar Compra</button></a> <br>
                            <a href="">Continuar Comprando</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php') ?>
  </body>
</html>