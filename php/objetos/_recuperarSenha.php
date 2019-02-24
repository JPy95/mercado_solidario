<?php
    include_once('..\Conexao\Conexao.php');
    include_once('..\Entidades\RecuperarSenha.php');

    $conexao = new Conexao();
    $recuperarSenha = new RecuperarSenha();

    $senha = $_POST['pass'];
    $idUsuario = $_POST['idUsuario'];
    $tipoPessoa = $_POST['tipoPessoa'];

    var_dump($idUsuario);
    var_dump($tipoPessoa);

    $result = $recuperarSenha->verificaSenha($conexao, $senha,$idUsuario);

    if($result){
        header("Location: ../../recuperar_senha.php?reucuperarSenha=false");
    } else {
        $recuperarSenha->update($conexao,password_hash($senha, PASSWORD_DEFAULT),$tipoPessoa,$idUsuario);
        header("Location: ../../login.php?reucuperarSenha=true");
    }
?>