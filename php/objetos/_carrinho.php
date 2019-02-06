<?php
    
    







    
    public function addCarrinho($idPdt,$vlrPdt,$qtde){
        $carrinho[] = array($idPdt,array($vlrPdt,$qtde));
    }

    public function 
    
    $produto1 = array(1,array(1000,1));
    $produto2 = array(2,array(1500,1));
    $produto3 = array(3,array(1500,2));

    $carrinho[] = $produto1;
    $carrinho[] = $produto2;
    $carrinho[] = $produto3;

    var_dump($carrinho);

    foreach($carrinho as $cart){
        echo "Dados: {$cart[0]}-{$cart[1][1]}\n";
    }
    


?>