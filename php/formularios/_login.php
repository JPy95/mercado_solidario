<?php
    //preencher com os includes de sessão
    //include de pessoa

    $email = $_POST['email'];  
    $pass = $_POST['pass'];


    if(empty($email) || empty($pass)){
        header("Location: ../../login.php?login=false");
    } else {
        header("Location: ../../index.php?login=true");
    }
?>