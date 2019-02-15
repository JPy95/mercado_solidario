<?php

class Login {

    private $email;
    private $senha;

    public function __construct($email,$senha){
        
        $this->email = $email;
        $this->senha = $senha;
    }

    public function verificaSenha($conexao,$senha){
        $con = $conexao->conectar();

        $query = "SELECT senha FROM usuario WHERE email = '".$this->getEmail()."';";

        $stmt = $con->prepare($query);
        $stmt->execute();
        if($stmt->rowCount()>0){
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return password_verify($this->getSenha(), $user['senha']);
        } else {
            $query = "SELECT senha FROM instituicoes WHERE email = '".$this->getEmail()."';";

            $stmt = $con->prepare($query);
            $stmt->execute();
            if($stmt->rowCount()>0){
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                return password_verify($this->getSenha(), $user['senha']);
            } else {
                return false;
            }
        }
    }

    public function verificaEmail($conexao,$email){
        $con = $conexao->conectar();

        $query = "SELECT * FROM usuario WHERE email = '".$this->getEmail()."';";

        $stmt = $con->prepare($query);
        $stmt->execute();
        
        
        if(($stmt->rowCount()) > 0){
            return $stmt;
        } else {
            $query = "SELECT * FROM instituicoes WHERE email = '".$this->getEmail()."';";

            $stmt = $con->prepare($query);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                return $stmt;
            } else {
                return false;
            }
        }
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
}

?>