<html>

    <?php
        include 'PHP/data.php';
    
        $title = 'FCCSI | Mapas';
        $keywords = 'FCCSI, Feira, Feirinha, Salesiano, Itajaí, Mapas';
        $css = ['main', 'fonts', 'alignment', 'maps', 'header', 'footer'];
        $js = [];
        include 'PHP/head.php';
    ?>

    <body>
        <?php include 'PHP/header.php'; ?>
         
        <main>

            <h1 class="gg-title center">Mapas FCCSI 2021</h1>
            <div class="maps">
                <a class="g-text link map" target="maps" href="DATA/mapa1.pdf">Dia 1: 26/10</a>
                <a class="g-text link map" target="maps" href="DATA/mapa2.pdf">Dia 2: 27/10</a>
                <a class="g-text link map" target="maps" href="DATA/mapa3.pdf">Dia 3: 28/10</a>
            </div>

        </main>

        <?php include 'PHP/footer.php'; ?>
    </body>

</html>