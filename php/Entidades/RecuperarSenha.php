<?php
    class RecuperarSenha {

        private $senha;

        public function verificaSenha($conexao, $senha,$idUsuario)
        {
            $con = $conexao->conectar();

            $query = "SELECT senha FROM usuario WHERE idUsuario = $idUsuario";

            $stmt = $con->prepare($query);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                return password_verify($senha, $user['senha']);
            } else {
                $query = "SELECT senha FROM instituicoes WHERE idInst = $idUsuario";

                $stmt = $con->prepare($query);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    var_dump(password_verify($senha, $user['senha']));
                    return password_verify($senha, $user['senha']);
                } else {
                    return false;
                }
            }
        }

        public function update($conexao,$senha,$tipoPessoa,$idUsuario){
            $con = $conexao->conectar();

            if($tipoPessoa =="instituicao"){
                $query = "UPDATE instituicoes SET senha = '$senha' WHERE idInst = $idUsuario";
            } else {
                $query = "UPDATE usuario SET senha = '$senha' WHERE idUsuario = $idUsuario";
            }

            $stmt = $con->prepare($query);
            return $stmt->execute();
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