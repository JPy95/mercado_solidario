<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php')?>
        <link rel="stylesheet" type="text/css" href="css\carrosel.css">
        <link rel="stylesheet" type="text/css" href="css\cards.css">
    </head>
    <body>
        <!--Barra de Navegação Principal-->
        <?php include_once('php\estruturas_base\nav_principal.php')?>
        <!--Barra de Navegação Categoria-->
        <?php include_once('php\estruturas_base\nav_categoria.php')?>
        <!--Carrosel Banner-->
        <?php include_once('php\objetos\carousel_banner.php')?>
        <!--Apresentação de Produtos-->
        <?php include_once('php\objetos\principais_produtos\produtos_principal.php')?>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php')?>
    </body>
    <script>
        $('.carousel').carousel({
            pause: true,
            interval: false
        });
    </script>
</html>