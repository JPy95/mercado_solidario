<?php
<<<<<<< HEAD
    
    







    
    public function addCarrinho($idPdt,$vlrPdt,$qtde){
        $carrinho[] = array($idPdt,array($vlrPdt,$qtde));
    }
=======
//colocar requires...

function adcionarAoCarrinho()
{

    $produto = new Item_Carrinho($id, $valor, $quantidade);

>>>>>>> 4a5105db110569e3436ccb0cee775837d1df8cad

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