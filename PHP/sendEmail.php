<?php

    // Define o destinatário do formulário
    $destinatario = "speck.empresarial@gmail.com";

    // Importa a função email()
    include 'createEmail.php';

    // Utiliza a função email(), que cria uma mensagem padronizada com as informações do formulário
    $mensagem = email($_POST['subject'], $_POST['firstName'], $_POST['lastName'], $_POST['mensagem']);

    // Informações de Envio do e-mail
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  FCCSI<nao-responda@fccsi.online>\n";

    // E-mail que irá enviar a mensagem
    $headers .= "X-Sender:  <nao-responda@fccsi.online>\n";

    // E-mail do servidor que enviou
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <contato@fccsi.online>\n";   // Caso a mensagem seja respondida,
    $headers .= "MIME-Version: 1.0\n";                      // vai para esse e-mail

    // Função que envia o e-mail em si
    mail($destinatario, $_POST['subject'], $mensagem, $headers);

    // Retorna para a página anterior
    header("Location: http://localhost:3000/contato.php");
    exit();
    
?>