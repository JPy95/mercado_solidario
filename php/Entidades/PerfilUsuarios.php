<?php
    
    class PerfilUsuarios {

        private $idUsuario;
        
        public function listaTipo($conexao,$categoria){

            $con = $conexao->conectar();

            $query = "SELECT tipo FROM tipo WHERE id_categoria = $categoria";

            $stmt = $con->prepare($query);
            return $stmt->execute();
        }

        /**
         * Get the value of idUsuario
         */ 
        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

        /**
         * Set the value of idUsuario
         *
         * @return  self
         */ 
        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

                return $this;
        }
    }


?>