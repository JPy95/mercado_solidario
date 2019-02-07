<html lang="pt-br">
    <head>
        <?php include_once('php\estruturas_base\head.php') ?>
        <script type="text/javascript" src="js\validacao_login.js"></script>
    </head>
    <body>
        <nav>
            <?php include_once('php\estruturas_base\nav_principal.php') ?>
        </nav>
        <div class="container">
                    <div class="title">
                    <h1>Finalizar compra</h1>
                    </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-4"><!--Endereco-->
                        <div>
                            <h3>Endereço</h3>
                        </div>
                        <div>
                            <select name="" id="">
                            <option value="id">Rua a</option>
                            <option value="id">Rua b</option>
                            </select> 
                        </div>
                        <div>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEndereco" aria-expanded="false" aria-controls="collapseEndereco">
                            Adicionar novo endereço
                            </button>
                        </div>
                        <div>
                            <div class="collapse" id="collapseEndereco">
                                <form action="">
                                    <div>
                                        <h5>Novo endereço</h5>
                                    </div>
                                    <div>
                                        <label for="">Rua:</label><br>
                                        <input type="text">
                                    </div>
                                    <div class="row">
                                        <div>
                                            <label for="">Num:</label><br>
                                            <input type="text" >
                                        </div>
                                        <div>
                                            <label for="">Comp:</label><br>
                                            <input type="text" >
                                        </div>
                                        <div>
                                            <label for="">Bairro:</label><br>
                                            <input type="text" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <label for="">Cidade::</label><br>
                                            <input type="text" >
                                        </div>
                                        <div>
                                            <label for="">UF:</label><br>
                                            <input type="text" >
                                        </div>
                                        <div>
                                            <label for="">CEP:</label><br>
                                            <input type="text" >
                                        </div>
                                    </div>
                                    <div>
                                        <button>Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4"><!--Cartao-->
                        <div>
                            <h5>Forma de pagamento</h5>
                        </div>
                        <div class="row">
                            <div>
                                <button>Boleto</button>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseCartao" aria-expanded="false" aria-controls="collapseCartao">
                                    Cartão
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="collapse" id="collapseCartao">
                                <div>
                                    <label for="">Cartão:</label><br>
                                    <select name="" id="">
                                        <option value="">Nubank</option>
                                        <option value="">Inter</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">Parcelas:</label><br>
                                    <select name="" id="">
                                        <option value="">1x</option>
                                        <option value="">2x</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAddCartao" aria-expanded="false" aria-controls="collapseAddCartao">
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
                                            <Select>
                                                <option value="">MasterCard</option>
                                                <option value="">Visa</option>
                                                <option value="">Elo</option>
                                            </Select>   
                                        </div>
                                    </div>
                                    <div>
                                        <button>Salvar cartão</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4"> <!--Revisão-->
                        <div>
                            <h3>Revisão</h3>
                        </div>
                        <?php include_once('') ?>
                    </div>

                </div>
            </div>        
        </div>
        
        
        
        
        
        
        </div>
        <!--Rodapé-->
        <?php include_once('php\estruturas_base\footer.php') ?>
  </body>
</html>