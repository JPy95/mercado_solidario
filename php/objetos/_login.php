<?php
    include_once('conexao.php');
    include_once('php\Entidades\Pessoa.php');

    $usuario = new Usuario();
    $conexao = new Conexao();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //$callbackProd = $_POST['callback'];
    
    $_busca = $usuario->selectSession($conexao,$email,$senha);

    

    if($_busca->num_rows > 0){
        session_start();
        $_SESSION['idCliente'] = $_busca->fetch_assoc()['idCliente'];
        /*if(!empty($callbackProd)){
            header("Location: ../pagamento.php?desc_prod=".$callbackProd);
        }else{
            header("Location: ../index.php?login=true");
        }*/
    }else{
        header("Location: ../login.php?login=false");
    }
?>