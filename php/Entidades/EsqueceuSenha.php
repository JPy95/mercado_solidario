<?php

class EsqueceuSenha
{

        private $email;
        private $cpf;

        public function __construct($email, $cpf)
        {
                $this->email = $email;
                $this->cpf = $cpf;
        }

        public function verificaDados($conexao,$email,$cpf){

                $con = $conexao->conectar();

                if(strlen($cpf)==14){
                        $query = "SELECT * FROM USUARIO WHERE EMAIL = '$email' AND CPF_CNPJ = '$cpf'";
                        
                        $stmt = $con->prepare($query);
                        $resul = $stmt->execute();

                        if($stmt->rowCount()>0){
                                return true;
                        } else {
                                $query = "SELECT * FROM instituicoes WHERE EMAIL = '$email' AND CNPJ = '$cpf'";
                                $stmt = $con->prepare($query);
                                $resul = $stmt->execute();

                                if($stmt->rowCount()>0){
                                        return true;
                                } else {
                                        return false;
                                }
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
         * Get the value of cpf
         */
        public function getCpf()
        {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         *
         * @return  self
         */
        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }
}

?>