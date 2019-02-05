<?php
    //ADD REQUEIRED
    class Carrinho{
        
        private $carrinho;
        private $tokenCart;

        public function insert($idUsuario,$conexao){
            $con = $conexao->conectar();

            foreach($this->getCarrinho() as $cart){
                $query="INSERT INTO carrinho(tokenCart,nomePdt,vlrPdt,doacao,idVendedor,idUsuario)
                        VALUES( '" . $this->getTokenCart() . "',
                                '" . $cart[0] . "',
                                '" . $cart[1][0] . "',
                                '" . $cart[1][1] . "',
                                '" . $cart[1][2] . "',
                                '" . $cart[1][3] . "',
                                '" . $idUsuario . "'
                                )";
            }
        }

        public function getTokenCart() {
            return $this->tokenCart = rand(1,1000000);
        }

        public function addPdt($idPdt){
            //chamar metodo de select de produto, pegar os seguintes dados (nome,valor,doacao,idVendedor);
            $this->carrinho[] = array("idPdt"=>$idPdr,array('nomePdr'=>$nomePdt,'vlrPdt'=>$vlrPdt,'doacao'=>$doacao,'idVendedor'=>$idVendedor));
            return $carrinho;
        } 

        public function getCarrinho() {
            return $this->carrinho;
        }
    }
    
    $produto1 = array(1,array("airfryer",1000,10,1));
    $produto2 = array(2,array("Airfryer",1500,15,2));
    $produto3 = array(3,array("Airfryer",1500,15,2));

    $carrinho[] = $produto1;
    $carrinho[] = $produto2;
    $carrinho[] = $produto3;

    var_dump($carrinho);

    foreach($carrinho as $cart){
        echo "Dados: {$cart[0]}-{$cart[1][1]}\n";
    }

?>