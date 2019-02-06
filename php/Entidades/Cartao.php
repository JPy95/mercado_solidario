<?php
//adicionar requires de conexao

/*
Usuario tera apenas a possibilidade de inserir ou excluir o cartão cadastrado para compra. 
Tirando a possibilidade de corrigir info do cartão;
 */
class Cartao
{

    private $nome;
    private $cpf_cnpj;
    private $numero;
    private $cvv;
    private $validade;
    private $id_usuario;


    public function __construct($nome, $cpf_cnpj, $numero, $cvv, $validade)
    {
        $this->nome = $nome;
        $this->cpf_cnpj = $cpf_cnpj;
        $this->numero = $numero;
        $this->cvv = $cvv;
        $this->validade = $validade;
        $this->id_usuario = $_SESSION['id_usuairo'];
    }

    public function insert($conexao)
    {
        $con = $conexao->conectar();

        $query = "INSERT INTO CARTAO(nome, cpf_cenpj, numero, cvv, validade, id_usuario) 
							values(
								'" . $this->getNome() . "',
								'" . $this->getCpf_cnpj() . "',
								'" . $this->getNumero() . "',
                                '" . $this->getCvv() . "',
								'" . $this->getValidade() . "',
                                '" . $this->getId_usuario() . "'                                
							)";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function delete($conexao, $id_cartao)
    {
        $con = $conexao->conectar();

        $query = "DELETE FROM cartao WHERE idCartao = '$id_cartao'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function select($conexao, $idUsuario)
    {
        $con = $conexao->conectar();

        $query = "SELECT * FROM cartao WHERE id_usuario = '$idUsuario'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
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
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of validade
     */
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     * Set the value of validade
     *
     * @return  self
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;

        return $this;
    }

    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of validade
     *
     * @return  self
     */
    public function setValidade($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }
}



?>