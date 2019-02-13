<?php
require_once('Endereco.php');
require_once('PessoaJuridica.php');
//adicionar requires
class Instituicao extends PessoaJuridica
{

    private $nome_fantasia;
    private $descricao;
    private $tipo_pessoa = 'instituições';
    private $img_inst;
    private $causa;
    private $website;

    public function __construct($razaoSocial,$tipo_pessoa,$nome_fantasia,$cnpj,$email,$senha,$descricao,$causa,$website)
    {
        parent::__construct($razaoSocial, $tipo_pessoa, $cnpj, $email, $senha);
        $this->nome_fantasia = $nome_fantasia;
        $this->descricao = $descricao;
        $this->causa = $causa;
        $this->website = $website;
    }

    public function insert($conexao)
    {
        $con = $conexao->conectar();

        $query = "INSERT INTO instituicoes(data_cadastro, razao_social, nome_fantasia, cnpj, email, senha, descricao, img_inst, causa, website) 
							values(
								NOW(),
								'" . $this->getRazaoSocial() . "',
								'" . $this->getNome_fantasia() . "',
                                '" . $this->getCnpj() . "',
                                '" . $this->getEmail() . "',
                                '" . $this->getSenha() . "',
                                '" . $this->getDescricao() . "',
                                null,
                                '" . $this->getCausa() . "',
								'" . $this->getWebsite() . "'                                
                            );";
        $stmt = $con->prepare($query);

        return $stmt->execute();
    }

    public function update($idUsuario, $conexao)
    {
        $con = $conexao->conectar();

        //organizar o update da imagem
        $query = "UPDATE instituicoes SET 
								razao_social='" . $this->getRazaoSocial() . "',
                                nome_fantasia='" . $this->getNome_fantasia() . "',
                                cnpj='" . $this->getCnpj() . "',
                                email='" . $this->getEmail() . "',
                                senha='" . $this->getSenha() . "',
                                descricao='" . $this->getDescricao() . "',
                                img_inst='" . $this->getImg_inst() . "',
                                causa='" . $this->getCausa() . "',
                                website='" . $this->getWebsite() . "'
                          WHERE id_usuario = '$idUsuario';";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function selectIdInst($cnpj, $conexao)
    {
        $con = $conexao->conectar();

        //organizar o update da imagem
        $query = "SELECT * FROM instituicoes WHERE cnpj = '$cnpj'";
        $stmt = $con->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            $idInst = $row->idInst;
        }
        var_dump($idInst);
        return $idInst;
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
     * Get the value of nome_fantasia
     */
    public function getImg_inst()
    {
        return $this->img_inst;
    }

    /**
     * Set the value of nome_fantasia
     *
     * @return  self
     */
    public function setImg_inst($img_inst)
    {
        $this->img_inst = $img_inst;

        return $this;
    }
}


?>