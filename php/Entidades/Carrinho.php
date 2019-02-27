<?php
require_once('..\Conexao\Conexao.php');

class Carrinho
{

    private $carrinho;
    private $tokenCart;

    public function insert($idUsuario, $conexao)
    {
        $con = $conexao->conectar();

        foreach ($this->getCarrinho() as $cart) {
            $query = "INSERT INTO carrinho(tokenCart,idProduto,vlrPdt,qtde_pdt,idUsuario)
                        VALUES( '" . $this->getTokenCart() . "',
                                '" . $cart[0] . "',
                                '" . $cart[1] . "',
                                '" . $cart[2] . "',
                                '" . $idUsuario . "'
                                )";
        }
    }

    public function __construct($produto)
    {
        //colcoar pra gerar o token cart.
        $carrinho[] = $produto;
        $this->setTokenCart();
    }

    public function adicionarItem($produto)
    {

        array_push($this->carrinho, $produto);

    }

    public function removerItem($indice)

    {

        unset($this->carrinho[$indice]);
    }


    /**
     * Get the value of carrinho
     */
    public function getCarrinho()
    {
        return $this->carrinho;
    }

    /**
     * Set the value of carrinho
     *
     * @return  self
     */
    public function setCarrinho($carrinho)
    {
        $this->carrinho = $carrinho;

        return $this;
    }

    /**
     * Get the value of tokenCart
     */
    public function getTokenCart()
    {

        return $this->tokenCart;
    }

    /**
     * Set the value of tokenCart
     *
     * @return  self
     */
    function setTokenCart()
    {
        $this->tokenCart = rand(1, 1000000);
        return $this;
    }
}
?>