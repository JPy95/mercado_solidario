<?php
//adicionar require da conexão
class Conta
{
    private $banco;
    private $agencia;
    private $conta;
    private $titular;
    private $cpf_cnpj;

    public function __construct($banco, $agencia, $conta, $titular, $cpf_cnpj)
    {
        $this->banco = $banco;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->titular = $titular;
        $this->cpf_cnpj = $cpf_cnpj;


    }

    public function insert($conexao)
    {
        $con = $conexao->conectar();

        $query = "INSERT INTO CONTA(banco, agencia, conta, titular, cpf_cnpj) 
							values(
								'" . $this->getBanco() . "',
								'" . $this->getAgencia() . "',
								'" . $this->getConta() . "',
                                '" . $this->getTitular() . "',
								'" . $this->getCpf_cnpj() . "'                                
							)";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function update($id_instituicao, $conexao)
    {
        $con = $conexao->conectar();

        $query = "UPDATE CONTA SET 
								banco='" . $this->getBanco() . "',
								agencia='" . $this->getAgencia() . "',
                                conta='" . $this->getConta() . "',
                                titular='" . $this->getTitular() . "',
                                cpf_cnpj='" . $this->getCpf_cnpj . "'
						  WHERE id_instituicao = '$id_instituicao'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }






    /**
     * Get the value of banco
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set the value of banco
     *
     * @return  self
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get the value of agencia
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Set the value of agencia
     *
     * @return  self
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Get the value of conta
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * Set the value of conta
     *
     * @return  self
     */
    public function setConta($conta)
    {
        $this->conta = $conta;

        return $this;
    }

    /**
     * Get the value of titular
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     *
     * @return  self
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

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
}

?>