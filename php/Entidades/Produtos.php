<?php 
//adicionar requires
class Produto
{
    private $nomePdt;
    private $vlrPdt;
    private $pctDoacao;
    private $descricao;
    private $tipoAnuncio;
    private $idtVenda;
    private $idTipo;
    private $idCategoria;
    private $idVendedor;
    private $urlImg;

    public function __construct($nomePdt, $vlrPdt, $pctDoacao, $descricao, $tipo, $idtVenda, $idTipo, $idCategoria, $idVendedor,$urlImg)
    {
        $this->nomePdt = $nomePdt;
        $this->vlrPdt = $vlrPdt;
        $this->pctDoacao = $pctDoacao;
        $this->descricao = $descricao;
        $this->tipo = $tipo;
        $this->idtVenda = $idtVenda;
        $this->idTipo = $idTipo;
        $this->idCategoria = $idCategoria;
        $this->idVendedor = $idVendedor;
    }

    public function insert($conexao)
    {
        $con = $conexao->conectar();
        $query = "INSERT INTO produto (nome_pdt,vlr_pdt,vlr_doacao,descricao,tipo_anuncio,idt_venda,id_tipo,id_categoria,id_vendedor) 
                    values(
                        '" . $this->getNomePdt() . "',
                        '" . $this->getVlrPdt() . "',
                        '" . $this->getPctDoacao() . "',
                        '" . $this->getDescricao() . "',
                        '" . $this->getTipoAnuncioi() . "',
                        '" . $this->getIdtVenda() . "',
                        '" . $this->getIdTipo() . "',
                        '" . $this->getIdCategoria() . "',
                        '" . $this->getIdVendedor() . "'                   
                    )";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function update($idProduto, $conexao)
    {
        $con = $conexao->conectar();
        $query = "UPDATE produto SET 
                        nome_pdt='" . $this->getNomePdt() . "',
                        vlr_pdt='" . $this->getVlrPdt() . "',
                        vlr_doacao='" . $this->getPctDoacao() . "',
                        descricao='" . $this->getDescricao() . "',
                        url_img_pdt='" . $this->getUrlImg() . "'
                    WHERE idProduto = '$idProduto'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function delete($idEndereco, $conexao)
    {
        $con = $conexao->conectar();
        $query = "DELETE FROM produto WHERE idProduto = '$idProduto'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function selectAllPdt($conexao)
    {
        $con = $conexao->conectar();
        $query = "SELECT * FROM produto";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function selectProdutoCategoria($idCat, $conexao)
    {
        $con = $conexao->conectar();
        $query = "SELECT * FROM produto WHERE id_categoria = '$idCat'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }


    /**
     * Get the value of nomePdt
     */
    public function getNomePdt()
    {
        return $this->nomePdt;
    }

    /**
     * Set the value of nomePdt
     *
     * @return  self
     */
    public function setNomePdt($nomePdt)
    {
        $this->nomePdt = $nomePdt;

        return $this;
    }

    /**
     * Get the value of vlrPdt
     */
    public function getVlrPdt()
    {
        return $this->vlrPdt;
    }

    /**
     * Set the value of vlrPdt
     *
     * @return  self
     */
    public function setVlrPdt($vlrPdt)
    {
        $this->vlrPdt = $vlrPdt;

        return $this;
    }

    /**
     * Get the value of pctDoacao
     */
    public function getPctDoacao()
    {
        return $this->pctDoacao;
    }

    /**
     * Set the value of pctDoacao
     *
     * @return  self
     */
    public function setPctDoacao($pctDoacao)
    {
        $this->pctDoacao = $pctDoacao;

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
     * Get the value of urlImg
     */
    public function getUrlImg()
    {
        return $this->urlImg;
    }

    /**
     * Set the value of urlImg
     *
     * @return  self
     */
    public function setUrlImg($urlImg)
    {
        $this->urlImg = $urlImg;

        return $this;
    }

    /**
     * Get the value of idTipo
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set the value of idTipo
     *
     * @return  self
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;

        return $this;
    }

    /**
     * Get the value of idCategoria
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     *
     * @return  self
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get the value of idVendedor
     */
    public function getIdVendedor()
    {
        return $this->idVendedor;
    }

    /**
     * Set the value of idVendedor
     *
     * @return  self
     */
    public function setIdVendedor($idVendedor)
    {
        $this->idVendedor = $idVendedor;

        return $this;
    }

    /**
     * Get the value of tipoAnuncio
     */
    public function getTipoAnuncio()
    {
        return $this->tipoAnuncio;
    }

    /**
     * Set the value of tipoAnuncio
     *
     * @return  self
     */
    public function setTipoAnuncio($tipoAnuncio)
    {
        $this->tipoAnuncio = $tipoAnuncio;

        return $this;
    }

    /**
     * Get the value of idtVenda
     */ 
    public function getIdtVenda()
    {
        return $this->idtVenda;
    }

    /**
     * Set the value of idtVenda
     *
     * @return  self
     */ 
    public function setIdtVenda($idtVenda)
    {
        $this->idtVenda = $idtVenda;

        return $this;
    }
}
?>