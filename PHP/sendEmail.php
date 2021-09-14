<?php

    // Inclui o banco de dados
    // include 'head.php';

    // Define o destinatário do formulário
    $destinatario = "speck.empresarial@gmail.com";

    // Resgata o nome digitado no formulário
    $remetente = $_POST['firstName'] . " " . $_POST['lastName'];

    // Resgata o assunto digitado no formulário e grava na variavel $assunto
    $assunto = $_POST['subject'];

    // Define a  mensagem que vai ser enviado no e-mail (HTML)
    $mensagem = "<strong>Nome:  </strong>".$remetente;
    $mensagem .= "<br>  <strong>Mensagem: </strong>"
    .$_POST['mensagem'];

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

    $key = file_get_contents("../DATA/gmail-smtp-entrada.pem");

    $fp = fopen("../DATA/msg.txt", "w");
    fwrite($fp, $mensagem);
    fclose($fp);

    openssl_pkcs7_encrypt(
        "../DATA/msg.txt",
        "../DATA/enc.txt",
        $key,
        array(
            "To" => $destinatario,
            "From" => "FCCSI<nao-responda@fccsi.online>",
            "Subject" => $assunto,
        )
    );

    $mensagem = file_get_contents('../DATA/enc.txt');

    echo $mensagem;

    // Função que envia o e-mail em si
    // mail($destinatario, $assunto, $mensagem, $headers);

    // Retorna para a página anterior
    // header("Location: http://localhost:3000/contato.php");
    // exit();
    
?>