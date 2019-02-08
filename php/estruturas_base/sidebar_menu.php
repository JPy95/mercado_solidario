<!--css Modal-->
<link rel="stylesheet" type="text/css" href="css\modals.css">
<!--Modal-->
<?php include_once('php\estruturas_base\modals\meus_dados.php');?>
<?php include_once('php\estruturas_base\modals\comentarios.php');?>
<?php include_once('php\estruturas_base\modals\info_clientes.php');?>
<div id="sidebar_menu">
    <div class="title_sidebar">
        <div class="">
            <img class="img_side foto_user" src="img\icones\avatar_side.png">
        </div>
        <div>
            <a href="perfil_user.php" class="texte_title_side">Nome do Usuário</a>
        </div>
    </div>
    <div class="dropdown show">
        <a class="btn_dropdown dropdown-toggle" href="#" role="button" id="sidebar_compras" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>
                <img class="img_menu_dropdown" src="img\icones\compras.png">
                Compras
            </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="sidebar_compras">
            <a class="dropdown-item" href="minha_compra.php">Minhas Compras</a>
            <button type="button" class="btn_sidebar_modal" data-toggle="modal" data-target="#modalMeusDados">
                <a class="dropdown-item">Meus dados</a>
            </button>
        </div>
    </div>
    <div class="dropdown show">
        <a class="btn_dropdown dropdown-toggle" href="#" role="button" id="sidebar_compras" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>
                <img class="img_menu_dropdown" src="img\icones\vendas.png">
                Vendas
            </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="sidebar_compras">
            <a class="dropdown-item" href="anuncios.php">Meus Anúncios</a>
            <a class="dropdown-item" href="new_produto.php">Novo Anúncio</a>
            <button type="button" class="btn_sidebar_modal" data-toggle="modal" data-target="#modalComentarios">
                <a class="dropdown-item">Comentrios</a>
            </button>
            <button type="button" class="btn_sidebar_modal" data-toggle="modal" data-target="#modalInfoClientes">
                <a class="dropdown-item">Info. de Compradores</a>
            </button>
        </div>
    </div>
</div>