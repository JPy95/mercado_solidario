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

    if($tipoPessoa=='instituicao'){
        $inst = new Instituicao($nome,$tipoPessoa,$nomeFantasia,$cpf_cnpj,$email,password_hash($senha, PASSWORD_DEFAULT),$desc,$causa,$website);
        $result1=$inst->insert($conexao);
        $endereco = new Endereco($log, $cep, $num, $compl, $bairro, $cidade, $uf, $inst->selectIdInst($cpf_cnpj,$conexao), $tipoPessoa);
        $result2=$endereco->insert($conexao);
        if($result1&&$result2){
            header("Location: ../../login.php?register=true");
        } else {
            header("Location: ?register=false");
        }
    } else if ($tipoPessoa=='juridica'){
        $pj = new PessoaJuridica($nome, $tipoPessoa, $cpf_cnpj, $email, password_hash($senha, PASSWORD_DEFAULT));
        $result = $pj->insert($conexao);
        if($result){
            header("Location: ../../login.php?register=true");
        } else {
            header("Location: ?register=false");
        }
    } else {
        $pf = new PessoaFisica($nome, $tipoPessoa, $cpf_cnpj, $email, password_hash($senha, PASSWORD_DEFAULT));
        $result = $pf->insert($conexao);
        if($result){
            header("Location: ../../login.php?register=true");
        } else {
            header("Location: ?register=false");
        }
    }
?>