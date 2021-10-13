<html>

    <?php
        include 'PHP/data.php';
    
        $title = 'FCCSI | Atividades Integradoras';
        $keywords = 'FCCSI, Feira, Feirinha, Salesiano, Itajaí, Atividades Integradoras';
        $css = ['main', 'fonts', 'alignment', 'atividades', 'header', 'footer'];
        $js = [];
        include 'PHP/head.php';
    ?>

    <body>
        <?php
            include 'PHP/header.php';
        ?>

        <main>
            <form id="selectors">
                <input type="radio" id="cat-1" name="categoria" value="1" checked>
                <input type="radio" id="cat-2" name="categoria" value="2">
                <input type="radio" id="cat-3" name="categoria" value="3">

                <input type="checkbox" id="dia-1" name="dia" value="1" checked>
                <input type="checkbox" id="dia-2" name="dia" value="2" checked>
                <input type="checkbox" id="dia-3" name="dia" value="3" checked>

                <input type="checkbox" id="hora-1" name="hora" value="1" checked>
                <input type="checkbox" id="hora-2" name="hora" value="2" checked>
                <input type="checkbox" id="hora-3" name="hora" value="3" checked>

                <div class="strip">
                    <div class="text-wrapper">
                        <h1 class="m-title">Inúmeras Atividades</h1>
                        <h2 class="p-title">Escolha aquelas que mais combinam com você!</h2>
                    </div>
                </div>

                <section id="labels" class="montserrat">

                    <span class="label-name">Categoria:</span>
                    <label for="cat-1">1</label>
                    <label for="cat-2">2</label>
                    <label for="cat-3">3</label>

                    <span class="label-name">Dias:</span>
                    <label for="dia-1">26/09</label>
                    <label for="dia-2">27/09</label>
                    <label for="dia-3">28/09</label>

                    <span class="label-name">Horários:</span>
                    <label for="hora-1">Primeiro</label>
                    <label for="hora-2">Segundo</label>
                    <label for="hora-3">Terceiro</label>

                </section>
                
                <section class="atividades">
                <?php 
            
                    for ($i = 0; $i < count($atividades); $i++) {
                        echo
                        '<div class="atividade cat-' . $atividades[$i][1] . ' dia-' . $atividades[$i][2] . ' hora-' . $atividades[$i][3] . '">
                            <h1 class="at-nome">' . $atividades[$i][0]. '</h1>
                            <div class="tags">
                                <h2 class="at-categoria">Categoria ' . $atividades[$i][1] . '</h2>
                                <h2 class="at-dia">' . $dias[$atividades[$i][2] - 1] . '</h2>
                                <h2 class="at-horario">Horário ' . $atividades[$i][3] . '</h2>
                            </div>
                            <p class="at-desc">' . $atividades[$i][6] . '<br>
                            <strong>Limite de Vagas:</strong> ' . $atividades[$i][4] . '<br>
                            <strong>';
                            
                            if (count($atividades[$i][5]) > 1) {
                                echo 'Responsáveis:</strong> ';
                                for ($j = 0; $j < count($atividades[$i][5]); $j++) {
                                    echo $atividades[$i][5][$j];
                                    if ($j < count($atividades[$i][5]) - 1) {
                                        echo " e ";
                                    }
                                }
                            } else {
                                echo 'Responsável:</strong> ';
                                echo $atividades[$i][5][0];
                            }
                            
                            echo '</p>
                        </div>';
                    }

                ?>
                </section>
                </form>
        </main>

        <?php
            include 'PHP/footer.php';
        ?>
    </body>

</html>