<?php
include_once('..\Conexao\Conexao.php');
include_once('..\Entidades\Login.php');

$conexao = new Conexao();
$con = $conexao->conectar();

$email = $_POST['email'];
$cpf = $_POST['cpf'];

$query = "select * from usuario where email = '" . $email "' and cpf = '" . $cpf . "';";
$stmt = $con->prepare($query);
$stmt->execute();



?>