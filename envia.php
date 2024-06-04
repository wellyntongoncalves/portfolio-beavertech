<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $textarea = addslashes($_POST['textarea']);

    $para = "777weca@gmail.com";
    $assunto = "Coleta de dados - Portfolio Wellynton Gonçalves";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Assunto: ".$textarea;

    $cabeca = "From: Wellynton09_@outlook.com.br"."\n"."Reply-top: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>