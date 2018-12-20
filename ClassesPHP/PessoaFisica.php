<?php
require_once('Pessoa.php');
require_once('Endereco.php');
class PessoaFisica extends Pessoa
{
    private $cpf;
    private $nome;

    public function __construct($email, $senha, $nome, $endereco, $cpf)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->endereco = $endereco;
    }


    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

?>
