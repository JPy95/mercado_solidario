<?php

class Telefone
{
    private $telefone;


    public function __construct($telefone)
    {
        $this->telefone = $telefone;
    }

    public function insert($conexao)
    {
        $con = $conexao->conectar();

        $query = "INSERT INTO TELEFONE(telefone) 
							values(
								'" . $this->getTelefone() . "'                                
							)";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function update($id_usuario, $conexao)
    {
        $con = $conexao->conectar();

        $query = "UPDATE TELEFONE SET 
                                telefone='" . $this->getTelefone() . "'
						  WHERE id_usuario = '$id_usuario'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }


    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
}




?>