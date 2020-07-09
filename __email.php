<?php

$para= "gabrielhhz2@gmail.com";
$assunto= "Contato Imobiliaria Assana";
$nome= $_REQUEST['nomesobrenome'];
$email= $_REQUEST['email'];
$telefone= $_REQUEST['telefone'];
$msg= $_REQUEST['mensagem'];

    $corpo = "<strong> Mensagem de Contatos</strong><br><br>";
    $corpo .= "<strong>Nome: </strong> $nome";
    $corpo .= "<br><strong>Telefone: </strong> $telefone";
    $corpo .= "<br><strong>Email: </strong> $email";
    $corpo .= "<br><strong>Mensagem: </strong> $msg";
 
    $header ="Content-Type: text/html; charset= utf-8\n";   
    $header .= "From: $email Reply-to $email\n";
    $headers .= "X-Mailer: PHP".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path: $email\n"; 
    $headers .= "MIME-Version: 1.0\n";
           
 
@mail($para,$assunto,$corpo,$header)

?>