<?php
require_once('Pessoa.php');
require_once('Endereco.php');
//adicionar requires de conexao
class PessoaJuridica extends Pessoa
{
    private $cnpj;
    private $razaoSocial;

    public function __construct($email, $senha, $razaoSocial, $endereco, $cnpj)
    {
        $this->cnpj = $cnpj;
        $this->email = $email;
        $this->senha = $senha;
        $this->razaoSocial = $razaoSocial;
        $this->endereco = $endereco;
    }


    /**
     * Get the value of cnpj
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     *
     * @return  self
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }



    /**
     * Get the value of razaoSocial
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     *
     * @return  self
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }
}

?>