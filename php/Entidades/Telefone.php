<?php 
//adicionar requires
class Endereco
{
    private $numero;
    private $id_usuario;
    private $tipo_pessoa;

    public function __construct($numero, $id_usuario, $tipo_pessoa)
    {
        $this->numero = $numero;
        $this->id_usuario = $id_usuario;
        $this->tipo_pessoa = $tipo_pessoa;
    }   

    public function insert($conexao)
    {
        $con = $conexao->conectar();
        if(!$tipo_pessoa.equals("instituicao")){
            $query = "INSERT INTO telefone(num, id_usuario, id_instituicao) 
                        values(
                            '" . $this->getNumero() . "',
                            '" . $this->getId_usuario() . "',
                            '" . null . "'                   
                        )";
        } else {
            $query = "INSERT INTO telefone(num, id_usuario, id_instituicao)  
                        values(
                            '" . $this->getNumero() . "',
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
            $query = "UPDATE telefone SET num='" . $this->getNumero() . "' WHERE id_usuario = '$idUsuario'";
        } else {
            $query = "UPDATE telefone SET num='" . $this->getNumero() . "' WHERE id_instituicao = '$idUsuario'";
        }
        
        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function delete($idTelefone, $conexao)
    {
        $con = $conexao->conectar();
        $query = "DELETE FROM telefone WHERE idTelefone = '$idTelefone'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function select($idUsuario, $conexao, $tipo_pessoa)
    {
        $con = $conexao->conectar();
        if(!$tipo_pessoa.equals("instituicao")){
            $query = "SELECT * FROM telefone WHERE id_usuario = '$idUsuario'";
        } else {
            $query = "SELECT * FROM telefone WHERE id_instituicao = '$idUsuario'";
        }
        $stmt = $con->prepare($query);
        return $stmt->execute();
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
}
?>