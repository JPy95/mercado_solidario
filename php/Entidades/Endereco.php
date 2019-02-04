<?php 
//adicionar requires
class Endereco
{
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;

    public function __construct($logradouro, $cep, $numero, $complemento, $bairro, $cidade, $estado)
    {
        $this->logradouro = $logradouro;
        $this->cep = $cep;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->complemento = $complemento;
        $this->cidade = $cidade;
        $this->uf = $uf;

    }

    public function insert($conexao)
    {
        $con = $conexao->conectar();

        $query = "INSERT INTO ENDERECO(logradouro, numero, complemento, bairro, cidade, uf, cep) 
							values(
								'" . $this->getLogradouro() . "',
								'" . $this->getNumero() . "',
								'" . $this->getComplemento() . "',
                                '" . $this->getBairro() . "',
                                '" . $this->getCidade() . "',
                                '" . $this->getUf() . "',
								'" . $this->getCep() . "'                                
							)";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function update($idUsuario, $conexao)
    {
        $con = $conexao->conectar();

        //corrigir update endereco
        $query = "UPDATE ENDERECO SET 
								nome='" . $this->getNome() . "',
								cpf='" . $this->getCpf() . "',
                                email='" . $this->getEmail() . "',
                                senha='" . $this->getSenha() . "'
						  WHERE id_usuario = '$idUsuario'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    /**
     * Get the value of logradouro
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set the value of logradouro
     *
     * @return  self
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get the value of cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

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
     * Get the value of complemento
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set the value of complemento
     *
     * @return  self
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }


    /**
     * Get the value of bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     *
     * @return  self
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }
}



?>