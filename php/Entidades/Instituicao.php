<?php
require_once('Endereco.php');
require_once('PessoaJuridica.php');
//adicionar requires
class Instituicao extends PessoaJuridica
{
    private $website;
    private $causa;
    private $descricao;
    public function __construct($email, $senha, $endereco, $razaoSocial, $cnpj, $website, $causa, $descricao)
    {

        $this->email = $email;
        $this->senha = $senha;
        $this->cnpj = $cnpj;
        $this->razaoSocial = $razaoSocial;
        $this->endereco = $endereco;
        $this->website = $website;
        $this->causa = $causa;
        $this->descricao = $descricao;

    }

    /**
     * Get the value of website
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set the value of website
     *
     * @return  self
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get the value of causa
     */
    public function getCausa()
    {
        return $this->causa;
    }

    /**
     * Set the value of causa
     *
     * @return  self
     */
    public function setCausa($causa)
    {
        $this->causa = $causa;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
}


?>