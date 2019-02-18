<?php
    include_once('..\Conexao\Conexao.php');
    include_once('..\Entidades\EsqueceuSenha.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '..\PHPMailer\src\Exception.php';
    require '..\PHPMailer\src\PHPMailer.php';
    require '..\PHPMailer\src\SMTP.php';

    $conexao = new Conexao();
    

    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    $esqueceuSenha = new EsqueceuSenha($conexao,$email,$cpf);
    $result = $esqueceuSenha->verificaDados($conexao,$email,$cpf);

    if($result){
        echo "enviar email de redifnição de senha.";

    } else {
        echo "usuario nao encontrado";
    }
?>