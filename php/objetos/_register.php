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
        $inst = new Instituicao($nome,$tipoPessoa,$nomeFantasia,$cpf_cnpj,$email,$senha,$desc,$causa,$website);
        $inst->insert($conexao);
        $endereco = new Endereco($log, $cep, $num, $compl, $bairro, $cidade, $uf, $inst->selectIdInst($cpf_cnpj,$conexao), $tipoPessoa);
        $endereco->insert($conexao);
    } else if ($tipoPessoa=='juridica'){
        $pj = new PessoaJuridica($nome, $tipoPessoa, $cpf_cnpj, $email, $senha);
        $pj->insert($conexao);
        $endereco = new Endereco($log, $cep, $num, $compl, $bairro, $cidade, $uf, $pj->selectIdUser($cpf_cnpj, $conexao), $tipoPessoa);
        $endereco->insert($conexao);
    } else {
        $pf = new PessoaFisica($nome, $tipoPessoa, $cpf_cnpj, $email, $senha);
        $pf->insert($conexao);
        $endereco = new Endereco($log, $cep, $num, $compl, $bairro, $cidade, $uf, $pf->selectIdUser($cpf_cnpj, $conexao), $tipoPessoa);
        $endereco->insert($conexao);
    }
?>