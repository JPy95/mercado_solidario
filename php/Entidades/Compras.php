<?php 
//adicionar requires

/*
VERIFICAR LOGICA PARA O ARMAZENAMENTO DESTES DADOS. TEM ALGO ERRADO
*/
class Compras
{
    private $vlrTotal;
    private $formaPgmt;
    private $qtdeParcela;
    private $idPdt;
    private $idVendedor;
    private $idComprador;
    private $idInst;
    private $idEndereco;
    private $idCartao;

    public function __construct($vlrTotal,$formaPgmt,$qtdeParcela,$idPdt,$idVendedor,$idComprador,$idInst,$idEndereco,$idCartao)
    {
        $this->vlrTotal = $vlrTotal;
        $this->formaPgmt = $formaPgmt;
        $this->qtdeParcela = $qtdeParcela;
        $this->idPdt = $idPdt;
        $this->idVendedor = $idVendedor;
        $this->idComprador = $idComprador;
        $this->idInst = $idInst;
        $this->idEndereco = $idEndereco;
        $this->idCartao = $idCartao;
    }   

    public function insert($conexao)
    {
        $con = $conexao->conectar();
        $query = "INSERT INTO compra (vlr_total,forma_pgmt,qtde_parcela,id_produto,id_vendedor,id_comprador,id_instituicao,id_endereco,id_cartao) 
                    values(
                        '" . $this->getVlrTotal() . "',
                        '" . $this->getFormaPgmt() . "',
                        '" . $this->getQtdeParcela() . "',
                        '" . $this->getIdPdt() . "',
                        '" . $this->getIdVendedor() . "',
                        '" . $this->getIdComprador() . "',
                        '" . $this->getIdInst() . "',
                        '" . $this->getIdEndereco() . "',
                        '" . $this->getIdCartao() . "'                   
                    )";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function delete($idCompra, $conexao)
    {
        $con = $conexao->conectar();
        $query = "DELETE FROM compra WHERE idCompra = '$idCompra'";

        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function selectVendedor($idUsuario, $conexao)
    {
        $con = $conexao->conectar();
        $query = "SELECT * FROM compra WHERE id_vendedor = '$idUsuario'";
        
        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function selectComprador($idUsuario, $conexao)
    {
        $con = $conexao->conectar();
        $query = "SELECT * FROM compra WHERE id_comprador = '$idUsuario'";
        
        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    public function selectInst($idUsuario, $conexao)
    {
        $con = $conexao->conectar();
        $query = "SELECT * FROM compra WHERE id_instituicao = '$idUsuario'";
        
        $stmt = $con->prepare($query);
        return $stmt->execute();
    }

    /**
     * Get the value of vlrTotal
     */ 
    public function getVlrTotal()
    {
        return $this->vlrTotal;
    }

    /**
     * Set the value of vlrTotal
     *
     * @return  self
     */ 
    public function setVlrTotal($vlrTotal)
    {
        $this->vlrTotal = $vlrTotal;

        return $this;
    }

    /**
     * Get the value of formaPgmt
     */ 
    public function getFormaPgmt()
    {
        return $this->formaPgmt;
    }

    /**
     * Set the value of formaPgmt
     *
     * @return  self
     */ 
    public function setFormaPgmt($formaPgmt)
    {
        $this->formaPgmt = $formaPgmt;

        return $this;
    }

    /**
     * Get the value of qtdeParcela
     */ 
    public function getQtdeParcela()
    {
        return $this->qtdeParcela;
    }

    /**
     * Set the value of qtdeParcela
     *
     * @return  self
     */ 
    public function setQtdeParcela($qtdeParcela)
    {
        $this->qtdeParcela = $qtdeParcela;

        return $this;
    }

    /**
     * Get the value of idPdt
     */ 
    public function getIdPdt()
    {
        return $this->idPdt;
    }

    /**
     * Set the value of idPdt
     *
     * @return  self
     */ 
    public function setIdPdt($idPdt)
    {
        $this->idPdt = $idPdt;

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
     * Get the value of idComprador
     */ 
    public function getIdComprador()
    {
        return $this->idComprador;
    }

    /**
     * Set the value of idComprador
     *
     * @return  self
     */ 
    public function setIdComprador($idComprador)
    {
        $this->idComprador = $idComprador;

        return $this;
    }

    /**
     * Get the value of idInst
     */ 
    public function getIdInst()
    {
        return $this->idInst;
    }

    /**
     * Set the value of idInst
     *
     * @return  self
     */ 
    public function setIdInst($idInst)
    {
        $this->idInst = $idInst;

        return $this;
    }

    /**
     * Get the value of idEndereco
     */ 
    public function getIdEndereco()
    {
        return $this->idEndereco;
    }

    /**
     * Set the value of idEndereco
     *
     * @return  self
     */ 
    public function setIdEndereco($idEndereco)
    {
        $this->idEndereco = $idEndereco;

        return $this;
    }

    /**
     * Get the value of idCartao
     */ 
    public function getIdCartao()
    {
        return $this->idCartao;
    }

    /**
     * Set the value of idCartao
     *
     * @return  self
     */ 
    public function setIdCartao($idCartao)
    {
        $this->idCartao = $idCartao;

        return $this;
    }
    }
?>