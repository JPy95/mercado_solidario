<?php

    include_once('php\Conexao\Conexao.php');
    include_once('php\Entidades\PerfilUsuarios.php');

    $perfilUsuario = new PerfilUsuarios();
    $conexao = new Conexao();

    echo $_GET['categoria'];
?>