<?php
    include_once('..\Conexao\Conexao.php');
    include_once('..\Entidades\Login.php');

    $conexao = new Conexao();
    
    $email = $_POST['email'];
    $senha = $_POST['pass'];
    //$callbackProd = $_POST['callback'];
    
    $login = new Login($email,$senha);

    if($login->verificaSenha($conexao,$senha)){
        $result = $login->verificaEmail($conexao,$email);
        $user = $result->fetch(PDO::FETCH_ASSOC);
        if($user['tipo_pessoa'] == "instituicao"){
            session_start();
            $_SESSION['idUser'] = $user['idInst'];
            $_SESSION['nome'] = $user['nome_fantasia'];
            $_SESSION['tipoPessoa'] = $user['tipo_pessoa'];
            header("Location: ../../index.php?login=true");
        } else {
            session_start();
            $_SESSION['idUser'] = $user['idUsuario'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['tipoPessoa'] = $user['tipo_pessoa'];
            header("Location: ../../index.php?login=true");
        }
    } else {
        header("Location: ../../login.php?login=false");
    }
?>