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
    private $id_usuario;
    private $tipo_pessoa;

    public function __construct($logradouro, $cep, $numero, $complemento, $bairro, $cidade, $estado, $id_usuario, $tipo_pessoa)
    {
        $this->logradouro = $logradouro;
        $this->cep = $cep;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->complemento = $complemento;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->id_usuario = $id_usuario;
        $this->tipo_pessoa = $tipo_pessoa;
    }   

    public function insert($conexao)
    {
        $con = $conexao->conectar();
        if(!$tipo_pessoa.equals("instituicao")){
            $query = "INSERT INTO ENDERECO(logradouro, numero, complemento, bairro, cidade, uf, cep, id_usuario, id_instituicao) 
                        values(
                            '" . $this->getLogradouro() . "',
                            '" . $this->getNumero() . "',
                            '" . $this->getComplemento() . "',
                            '" . $this->getBairro() . "',
                            '" . $this->getCidade() . "',
                            '" . $this->getUf() . "',
                            '" . $this->getCep() . "',
                            '" . $this->getId_usuario() . "',
                            '" . null . "'                   
                        )";
        } else {
            $query = "INSERT INTO ENDERECO(logradouro, numero, complemento, bairro, cidade, uf, cep, id_usuario, id_instituicao) 
                        values(
                            '" . $this->getLogradouro() . "',
                            '" . $this->getNumero() . "',
                            '" . $this->getComplemento() . "',
                            '" . $this->getBairro() . "',
                            '" . $this->getCidade() . "',
                            '" . $this->getUf() . "',
                            '" . $this->getCep() . "',
                            '" . null . "',
                            '" . $this->getId_usuario() . "'                   
                        )";
        }
        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function update($idUsuario, $conexao)
    {
        $con = $conexao->conectar();
        if(!$tipo_pessoa.equals("instituicao")){
            $query = "UPDATE ENDERECO SET 
                            logradouro='" . $this->getLogradouro() . "',
                            num='" . $this->getNumero() . "',
                            compl='" . $this->getComplemento() . "',
                            bairro='" . $this->getBairro() . "',
                            cidade='" . $this->getCidade() . "',
                            uf='" . $this->getUf() . "',
                            cep='" . $this->getCep() . "'
                        WHERE id_usuario = '$idUsuario'";
        } else {
            $query = "UPDATE ENDERECO SET 
                            logradouro='" . $this->getLogradouro() . "',
                            num='" . $this->getNumero() . "',
                            compl='" . $this->getComplemento() . "',
                            bairro='" . $this->getBairro() . "',
                            cidade='" . $this->getCidade() . "',
                            uf='" . $this->getUf() . "',
                            cep='" . $this->getCep() . "'
                        WHERE id_instituicao = '$idUsuario'";
        }
        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function delete($idEndereco, $conexao)
    {
        $con = $conexao->conectar();
        $query = "DELETE FROM ENDERECO WHERE idEndereco = '$idEndereco'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function select($idUsuario, $conexao)
    {
        $con = $conexao->conectar();
        if(!$tipo_pessoa.equals("instituicao")){
            $query = "SELECT * FROM ENDERECO WHERE id_usuario = '$idUsuario'";
        } else {
            $query = "SELECT * FROM ENDERECO WHERE id_instituicao = '$idUsuario'";
        }
        
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

    /**
     * Get the value of id_usuario
     */ 
    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @return  self
     */ 
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }
}



?>