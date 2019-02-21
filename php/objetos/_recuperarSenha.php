<?php
    include_once('..\Conexao\Conexao.php');
    include_once('..\Entidades\RecuperarSenha.php');

    $recuperarSenha = new RecuperarSenha();

    $senha = $_POST['pass'];

    /*
        Apos a aleboração do metodo de updade de senha, realiza a chamada do metodo e concluir a alteração de senha.
    */
    
?>