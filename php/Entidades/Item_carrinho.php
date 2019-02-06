<?php

class Item_Carrinho
{

    private $idProduto;
    private $valor;
    private $quantidade;

    public function __construct($idProduto, $valor, $quantidade)
    {

        $this->idProduto = $idProduto;
        $this->valor = $valor;
        $this->quantidade = $quantidade;

    }


    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @return  self
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of idProduto
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set the value of idProduto
     *
     * @return  self
     */
    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;

        return $this;
    }
}




?>