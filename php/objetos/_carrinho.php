<?php

function adcionarAoCarrinho()
{

    $produto = new Item_Carrinho($id, $valor, $quantidade);


    if (isset($_COOKIE['Carrinho'])) {
        $carrinho = new Carrinho($produto);
        setcookie("Carrinho", $carrinho);

    } else {

        $carrinho = $_COOKIE["Carrinho"];
        $carrinho->adicionarItem($produto);
        $_COOKIE["Carrinho"] = $carrinho;

    }

}


function removerCarrinho($indice)
{
    $carrinho = $_COOKIE["Carrinho"];
    $carrinho->removerItem($indice);
    $_COOKIE["Carrinho"] = $carrinho;

}


?>