<?php
require_once('Pessoa.php');
require_once('Endereco.php');
//adicionar requires
class PessoaFisica extends Pessoa
{
    private $cpf;
    private $nome;

    public function __construct($email, $senha, $nome, $endereco, $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
        $this->endereco = $endereco;
    }



    public function insert($conexao)
    {
        $con = $conexao->conectar();

        $query = "INSERT INTO USUARIO(nome, cpf, email, senha) 
							values(
								'" . $this->getNome() . "',
								'" . $this->getCpf() . "',
								'" . $this->getEmail() . "',
								'" . $this->getSenha() . "'                                
							)";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }


    public function update($idUsuario, $conexao)
    {
        $con = $conexao->conectar();

        $query = "UPDATE USUARIO SET 
								nome='" . $this->getNome() . "',
								cpf='" . $this->getCpf() . "',
                                email='" . $this->getEmail() . "',
                                senha='" . $this->getSenha() . "'
						  WHERE id_usuario = '$idUsuario'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
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

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

?>
