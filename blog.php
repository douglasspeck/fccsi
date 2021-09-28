<!DOCTYPE html>
<html lang="pt-BR">
    <?php

        $title = 'FCCSI | Blog';
        $keywords = 'FCCSI, Feira, Feirinha, Salesiano, Itajaí, Blog';
        $css = ['main', 'fonts', 'header', 'alignment', 'footer'];
        $js = [];
        include 'PHP/head.php';

    ?>
    <body>

        <style> #disqus_thread {width: 60%; margin: 5% auto 0;} </style>

        <?php include 'PHP/header.php' ?>

        <?php include 'PHP/under-construction.php' ?>
        
        <div id="disqus_thread"></div>

        <?php include 'PHP/footer.php' ?>

        <script>
            var disqus_config = function () {
            this.page.url = '<?php echo get_permalink(); ?>';
            this.page.identifier = 'main_page';
            };
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://fccsi.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Por favor, permita o uso de JavaScript para ver os <a href="https://disqus.com/?ref_noscript">comentários alimentados por Disqus</a>.</noscript>

    </body>
</html>