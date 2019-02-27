<?php
require_once('Pessoa.php');
require_once('Endereco.php');

class PessoaFisica extends Pessoa
{
    private $cpf;
    private $nome;
    private $img_usuario;

    public function __construct($nome, $tipo_pessoa, $cpf, $email, $senha)
    {
        parent::__construct($tipo_pessoa, $email, $senha);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function conferirCpf($conexao)
    {


        $con = $conexao->conectar();
        $query = "SELECT * FROM instituicoes WHERE cpf_cnpj = '" . $this->getCpf() . "';";


        $stmt = $con->prepare($query);
        $stmt->execute();

        if (($stmt->rowCount()) > 0) {
            return false;
        } else {
            $query = "SELECT * FROM usuario WHERE cpf_cnpj = '" . $this->getCpf() . "';";

            $stmt = $con->prepare($query);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
        }

    }

    //insert usuario pessoa fisica
    public function insert($conexao)
    {
        $con = $conexao->conectar();

        $query = "INSERT INTO USUARIO(dta_cadastro, nome, tipo_pessoa, cpf_cnpj, email, senha, img_usuario) 
							values(
                                  NOW(),
								'" . $this->getNome() . "',
                                '" . $this->getTipo_pessoa() . "',
								'" . $this->getCpf() . "',
								'" . $this->getEmail() . "',
								'" . $this->getSenha() . "',
                                null                                
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
                                senha='" . $this->getSenha() . "',
                                img_usuario= '" . $this->getImg_usuario() . "'
						  WHERE id_usuario = $idUsuario";

        var_dump($query);
        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function selectIdUser($cpf, $conexao)
    {
        $con = $conexao->conectar();

        //organizar o update da imagem
        $query = "SELECT * FROM usuario WHERE cpf_cnpj = $cpf";

        $stmt = $con->prepare($query);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            $IdUser = $row->idUsuario;
        }

        return $IdUser;
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

    /**
     * Get the value of nome
     */
    public function getImg_usuario()
    {
        return $this->img_usuario;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setImg_usuario($img_usuario)
    {
        $this->img_usuario = $img_usuario;

        return $this;
    }
}

?>
