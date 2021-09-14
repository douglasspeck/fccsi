<html>

    <?php
        include 'PHP/data.php';
    
        $title = 'FCCSI | Contato';
        $keywords = 'FCCSI, Feira, Feirinha, Salesiano, Itajaí, Contato';
        $css = ['main', 'fonts', 'alignment', 'header', 'footer'];
        $js = [];
        include 'PHP/head.php';
    ?>

    <body>
        <?php include 'PHP/header.php'; ?>

        <form name="emailForm" method="post" action="PHP/sendEmail.php">

            <h1>Nome Completo:</h1>
            <input type="text" name="firstName" placeholder="Primeiro Nome">
            <input type="text" name="lastName" placeholder="Sobrenome">

            <h1>Email:</h1>
            <input type="text" name="email" placeholder="exemplo@seuemail.com.br">

            <h1>Assunto:</h1>
            <input type="text" name="subject" placeholder="Eu tenho uma dúvida!">

            <h1>Mensagem:</h1>
            <textarea name="mensagem" cols="45" rows="5"></textarea>

            <br>
            <input type="submit" value="Enviar">

        </form>

        <?php include 'PHP/footer.php'; ?>
    </body>

</html>