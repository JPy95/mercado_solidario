<?php
    //ADD REQUEIRED
    class Carrinho{
        
        private $carrinho;
        private $tokenCart;

        public function insert($idUsuario,$conexao){
            $con = $conexao->conectar();
            $tokenCart = $this->getTokenCart();

            foreach($this->getCarrinho() as $cart){
                $query="INSERT INTO carrinho(tokenCart,vlrPdt,doacao,qtde,idUsuario)
                        VALUES( '" . $tokenCart . "',
                                '" . $cart[0] . "',
                                '" . $cart[1][0] . "',
                                '" . $cart[1][1] . "',
                                '" . $cart[1][2] . "',
                                '" . $cart[1][3] . "',
                                '" . $idUsuario . "'
                                )";
            }
        }
    }
?>