<?php
//adicionar require da conexão
class Conta
{
    private $banco;
    private $agencia;
    private $conta;
    private $titular;
    private $cnpj_cpf;

    public function __construct($banco, $agencia, $conta, $titular, $cnpj_cpf)
    {
        $this->banco = $banco;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->titular = $titular;
        $this->cnpj_cpf = $cnpj_cpf;


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
     * Get the value of cnpj_cpf
     */
    public function getCnpj_cpf()
    {
        return $this->cnpj_cpf;
    }

    /**
     * Set the value of cnpj_cpf
     *
     * @return  self
     */
    public function setCnpj_cpf($cnpj_cpf)
    {
        $this->cnpj_cpf = $cnpj_cpf;

        return $this;
    }
}

?>