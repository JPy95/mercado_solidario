<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php') ?>
        <link rel="stylesheet" type="text/css" href="css\finalizar_compra.css">
        <link rel="stylesheet" type="text/css" href="css\modals.css">
    </head>
    <body>
        <nav>
            <?php include_once('php\estruturas_base\nav_principal.php') ?>
        </nav>
            <?php include_once('php\estruturas_base\modals\add_endereco.php') ?>
        <div class="container">
                    <h1>Finalizar compra</h1>
            <div class="col-xl-12" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-xl-4" style="border-right:1px solid rgba(128, 128, 128, 0.2)"><!--Endereco-->
                        <div>
                            <h3 class="style_subtitle_slide">Endereço</h3>
                        </div>
                        <div>
                            <select  class="format_select" name="" id="">
                            <option value="id">Rua a</option>
                            <option value="id">Rua b</option>
                            </select> 
                        </div>
                        <div class="descricao_endereco">
                            <span>Rua: <label class="descricao_anun_valor">Cambe</label></span><br>
                            <span>Complemento: <label class="descricao_anun_valor"></label></span><br>
                            <span>Cidade-UF: <label class="descricao_anun_valor">FISICA</label></span><br>
                            <span>CEP: <label class="descricao_anun_valor">XXX.XXX.XXX-XX</label></span><br>
                        </div>
                        <button class="button_compras w-75" type="button" data-toggle="modal" data-target="#modalAddEndereco">
                            <a>Adicionar novo endereço</a>
                        </button>
                    </div>
                    <div class="col-xl-4"><!--Cartao-->
                        <div>
                            <h3 class="style_subtitle_slide">Forma de pagamento</h3>
                        </div>
                        <div class="row">
                            <div>
                                <button class="button_compras">Boleto</button>
                                <button  class="button_compras" type="button" data-toggle="collapse" data-target="#collapseCartao" aria-expanded="false" aria-controls="collapseCartao">
                                    Cartão
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="collapse" id="collapseCartao">
                                <div>
                                    <label for="">Cartão:</label><br>
                                    <select class="format_select" name="" id="">
                                        <option value="">Nubank</option>
                                        <option value="">Inter</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">Parcelas:</label><br>
                                    <select class="format_select" name="" id="">
                                        <option value="">1x</option>
                                        <option value="">2x</option>
                                    </select>
                                </div>
                                <div>
                                    <button  class="button_compras" type="button" data-toggle="collapse" data-target="#collapseAddCartao" aria-expanded="false" aria-controls="collapseAddCartao">
                                        Adicionar novo cartão
                                    </button>
                                </div>
                                <div class="collapse" id="collapseAddCartao">
                                    <div>
                                        <h5>Novo cartão</h5>
                                    </div>
                                    <div>
                                        <label for="">Número:</label><br>
                                        <input type="text">    
                                    </div>
                                    <div>
                                        <label for="">Titular:</label><br>
                                        <input type="text">    
                                    </div>
                                    <div class="row">
                                        <div>
                                            <label for="">Validade:</label><br>
                                            <input type="text">    
                                        </div>
                                        <div>
                                            <label for="">CVV:</label><br>
                                            <input type="text">    
                                        </div>
                                        <div>
                                            <label for="">Bandeira:</label><br>
                                            <Select class="format_select">
                                                <option value="">MasterCard</option>
                                                <option value="">Visa</option>
                                                <option value="">Elo</option>
                                            </Select>   
                                        </div>
                                    </div>
                                    <div>
                                        <button class="button_compras">Salvar cartão</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4"> <!--Revisão-->
                        <div>
                            <h3 class="style_subtitle_slide">Revisão</h3>
                        </div>
                        <?php include_once('php\estruturas_base\card_produto.php') ?>
                    </div>

                </div>
            </div>        
        </div>     
        
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php') ?>
        <script type="text/javascript" src="js\validacao_login.js"></script>
  </body>
</html>