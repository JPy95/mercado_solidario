<?php

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




}

?>