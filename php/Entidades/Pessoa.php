<?php
require_once('Endereco.php');
class Usuario

{
    private $tipo_pessoa;
    private $email;
    private $senha;

    //construtor
    public function __construct($tipo_pessoa, $email, $senha)
    {
        $this->tipo_pessoa = $tipo_pessoa;
        $this->email = $email;
        $this->senha = $senha;
    }

    
    /*
    public function insert($conexao)
    {
        $con = $conexao->conectar();

        $query = "INSERT INTO USUARIO(dta_cadastro, nome, tipo_pessoa, cpf_cnpj, email, senha) 
							values(
                                '" . NOW() . "',
								'" . $this->getNome() . "',
                                '" . $this->getTipo_pessoa() . "',
                                '" . $this->getCpf_cnpj() . "',
								'" . $this->getEmail() . "',
								'" . $this->getSenha() . "'                                
							)";
        $stmt = $con->prepare($query);
        return $stmt->execute();
    }
    */

    /**
     * Get the value of data_cadastro
     */
    public function getData_cadastro()
    {
        return $this->data_cadastro;
    }

    /**
     * Set the value of data_cadastro
     *
     * @return  self
     */
    public function setData_cadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;

        return $this;
    }

    /**
     * Get the value of cpf_cnpj
     */
    public function getCpf_cnpj()
    {
        return $this->cpf_cnpj;
    }

    /**
     * Set the value of cpf_cnpj
     *
     * @return  self
     */
    public function setCpf_cnpj($cpf_cnpj)
    {
        $this->cpf_cnpj = $cpf_cnpj;

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

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of tipo_pessoa
     */
    public function getTipo_pessoa()
    {
        return $this->tipo_pessoa;
    }

    /**
     * Set the value of tipo_pessoa
     *
     * @return  self
     */
    public function setTipo_pessoa($tipo_pessoa)
    {
        $this->tipo_pessoa = $tipo_pessoa;

        return $this;
    }
}
?>