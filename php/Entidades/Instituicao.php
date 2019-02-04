<?php
require_once('Endereco.php');
require_once('PessoaJuridica.php');
//adicionar requires
class Instituicao extends PessoaJuridica
{

    private $nome_fantasia;
    private $website;
    private $causa;
    private $descricao;
    private $telefone;

    public function __construct($email, $senha, $endereco, $razaoSocial, $cnpj, $website, $causa, $descricao, $telefone)
    {

        $this->email = $email;
        $this->senha = $senha;
        $this->cnpj = $cnpj;
        $this->razaoSocial = $razaoSocial;
        $this->endereco = $endereco;
        $this->website = $website;
        $this->causa = $causa;
        $this->descricao = $descricao;
        $this->telefone = $telefone;

    }

    public function insert($conexao)
    {
        $con = $conexao->conectar();

        $query = "INSERT INTO INSTITUICOES(data_cadastro, razao_social, nome_fantasia, cnpj, email, senha, descrição, img_isnt, causa, website) 
							values(
								'" . getdate() . "',
								'" . $this->getRazaoSocial() . "',
								'" . $this->getNome_fantasia() . "',
                                '" . $this->getCnpj() . "',
                                '" . $this->getEmail() . "',
                                '" . $this->getSenha() . "',
                                '" . $this->getDescricao() . "',
                                '" . null . "',
                                '" . $this->getCausa() . "',
								'" . $this->getWebsite() . "'                                
                            );
                            INSERT INTO TELEFONE(telefone) 
							values(
								'" . $this->getTelefone() . "'                                
							);";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function update($idUsuario, $conexao)
    {
        $con = $conexao->conectar();

        //organizar o update da imagem
        $query = "UPDATE INSTITUICOES SET 
								razao_social='" . $this->getRazaoSocial() . "',
                                nome_fantasia='" . $this->getNome_fantasia() . "',
                                cnpj='" . $this->getCnpj() . "',
                                email='" . $this->getEmail() . "',
                                senha='" . $this->getSenha() . "',
                                descricao='" . $this->getDescricao() . "',
                                img_inst='" . null . "',
                                causa='" . $this->getCausa() . "',
                                website='" . $this->getWebsite() . "'
                          WHERE id_usuario = '$idUsuario';

                          UPDATE TELEFONE SET 
                                telefone='" . $this->getTelefone() . "'
						  WHERE id_usuario = '$id_usuario'; ";



        $stmt = $con->prepare($query);


        return $stmt->execute();

    }




    /**
     * Get the value of website
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set the value of website
     *
     * @return  self
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get the value of causa
     */
    public function getCausa()
    {
        return $this->causa;
    }

    /**
     * Set the value of causa
     *
     * @return  self
     */
    public function setCausa($causa)
    {
        $this->causa = $causa;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of data_cadastro
     */
    public function getData_cadastro()
    {
        return $this->data_cadastro;
    }

    /**
     * Set the value of data_cadastro
     *
     * @return  self
     */
    public function setData_cadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;

        return $this;
    }

    /**
     * Get the value of nome_fantasia
     */
    public function getNome_fantasia()
    {
        return $this->nome_fantasia;
    }

    /**
     * Set the value of nome_fantasia
     *
     * @return  self
     */
    public function setNome_fantasia($nome_fantasia)
    {
        $this->nome_fantasia = $nome_fantasia;

        return $this;
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