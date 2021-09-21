<html>

    <?php
        include 'PHP/data.php';
    
        $title = 'FCCSI | Contato';
        $keywords = 'FCCSI, Feira, Feirinha, Salesiano, Itajaí, Contato';
        $css = ['main', 'fonts', 'alignment', 'contato', 'header', 'footer'];
        $js = [];
        include 'PHP/head.php';
    ?>

    <body>
        <?php include 'PHP/header.php'; ?>

        <section class="contato">
            <h1 class="g-title">Fale conosco!</h1>
            <form class="montserrat p-text" name="emailForm" method="post" action="PHP/sendEmail.php">

                <input required type="text" name="firstName" placeholder="Nome">
                <input required type="text" name="lastName" placeholder="Sobrenome">
                <input required type="text" name="email" placeholder="Seu Email">
                <input required type="text" name="subject" placeholder="Assunto da Mensagem">
                <textarea required name="mensagem" rows="5" placeholder="Escreva aqui sua mensagem!" id="resizeable"></textarea>
                <input type="submit" value="Enviar">

            </form>
        </section>

        <?php include 'PHP/footer.php'; ?>
    </body>

</html>