<?php
include_once('..\Conexao\Conexao.php');
include_once('..\Entidades\PessoaJuridica.php');
include_once('..\Entidades\PessoaFisica.php');
include_once('..\Entidades\Instituicao.php');
include_once('..\Entidades\Endereco.php');

$conexao = new Conexao();

$tipoPessoa = $_POST['pessoa'];
$nome = $_POST['nome'];
$cpf_cnpj = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['confirma_pass'];
    //Abaixo são dados sobre instituições
$website = $_POST['site'];
$nomeFantasia = $_POST['fantasia'];
$cep = $_POST['cep'];
$log = $_POST['log'];
$num = $_POST['num'];
$compl = $_POST['compl'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$causa = $_POST['causa'];
$desc = $_POST['desc'];

switch ($tipoPessoa) {

    case "instituicao":
        $inst = new Instituicao($nome, $tipoPessoa, $nomeFantasia, $cpf_cnpj, $email, password_hash($senha, PASSWORD_DEFAULT), $desc, $causa, $website);
        if ($inst->conferirCnpj($conexao) && $inst->conferirEmail($conexao)) {
            $result1 = $inst->insert($conexao);
            $endereco = new Endereco($log, $cep, $num, $compl, $bairro, $cidade, $uf, $inst->selectIdInst($cpf_cnpj, $conexao), $tipoPessoa);
            $result2 = $endereco->insert($conexao);
            header("Location: ../../login.php?register=true");
        } elseif ($inst->conferirCnpj($conexao) == false && $inst->conferirEmail($conexao) == true) {
            header("Location: ../../register.php?cpf_cnpj=false");
        } elseif ($inst->conferirCnpj($conexao) == true && $inst->conferirEmail($conexao) == false) {
            header("Location: ../../register.php?email=false");
        } else {
            header("Location: ../../register.php?register=false");
        }
        break;
    case "juridica":
        $pj = new PessoaJuridica($nome, $tipoPessoa, $cpf_cnpj, $email, password_hash($senha, PASSWORD_DEFAULT));
        if ($pj->conferirCnpj($conexao) && $pj->conferirEmail($conexao)) {
            $result = $pj->insert($conexao);
            header("Location: ../../login.php?register=true");
        } elseif ($pj->conferirCnpj($conexao) == false && $pj->conferirEmail($conexao) == true) {
            header("Location: ../../register.php?cnpj=false");
        } elseif ($pj->conferirCnpj($conexao) == true && $pj->conferirEmail($conexao) == false) {
            header("Location: ../../register.php?email=false");
        } else {
            header("Location: ../../register.php?register=false");
        }
        break;
    case "fisica":
        $pf = new PessoaFisica($nome, $tipoPessoa, $cpf_cnpj, $email, password_hash($senha, PASSWORD_DEFAULT));
        if ($pf->conferirCpf($conexao) && $pf->conferirEmail($conexao)) {
            $result = $pf->insert($conexao);
            header("Location: ../../login.php?register=true");
        } elseif ($pf->conferirCpf($conexao) == false && $pf->conferirEmail($conexao) == true) {
            header("Location: ../../register.php?cpf_cnpj=false");
        } elseif ($pf->conferirCpf($conexao) == true && $pf->conferirEmail($conexao) == false) {
            header("Location: ../../register.php?email=false");
        } else {
            header("Location: ../../register.php?register=false");
        }
        break;
}


?>