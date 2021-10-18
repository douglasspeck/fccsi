<html>

    <?php
        include 'PHP/data.php';
    
        $title = 'FCCSI | Projetos';
        $keywords = 'FCCSI, Feira, Feirinha, Salesiano, Itajaí, Projetos';
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

                <input type="checkbox" id="cnst" name="area" value="1" checked>
                <input type="checkbox" id="chst" name="area" value="2" checked>
                <input type="checkbox" id="mst"  name="area" value="3" checked>
                <input type="checkbox" id="lcst" name="area" value="4" checked>

                <input type="checkbox" id="dia-1" name="dia" value="1" checked>
                <input type="checkbox" id="dia-2" name="dia" value="2" checked>
                <input type="checkbox" id="dia-3" name="dia" value="3" checked>

                <input type="checkbox" id="hora-1" name="hora" value="1" checked>
                <input type="checkbox" id="hora-2" name="hora" value="2" checked>
                <input type="checkbox" id="hora-3" name="hora" value="3" checked>

                <div class="strip">
                    <div class="text-wrapper">
                        <h1 class="m-title">Projetos</h1>
                        <h2 class="p-title">Produzidos pelos alunos!<br>As atividades com Bancas Avaliadoras são exclusivas para o Ensino Médio.</h2>
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
            
                    for ($i = 0; $i < count($projetos); $i++){
                        for ($j = 0; $j < count($projetos[$i]); $j++) {
                            $categoria = $i + 1;
                            echo
                            '<div class="atividade cat-' . $categoria . ' dia-' . $projetos[$i][$j][2] . ' hora-' . $atividades[$i][3] . '">
                                <h1 class="at-nome">' . $projetos[$i][$j][0]. '</h1>
                                <div class="tags">
                                    <h2 class="at-categoria">Categoria ' . $categoria . '</h2>
                                    <h2 class="at-dia">' . $dias[$projetos[$i][$j][2] - 1] . '</h2>
                                    <h2 class="at-horario">';
                                        if($projetos[$i][$j][3] == 0) {
                                            echo 'Toda a manhã';
                                        } else {
                                            echo $horario_bancas[$i][$projetos[$i][$j][3]-1];
                                        }
                                echo '</h2>
                                </div>
                                <p class="at-desc">' . '
                                <strong>';
                                
                                if (count($projetos[$i][$j][4]) > 1) {
                                    echo 'Responsáveis:</strong> ';
                                    for ($k = 0; $k < count($projetos[$i][$j][4]); $k++) {
                                        echo $projetos[$i][$j][4][$k];
                                        if ($k < count($projetos[$i][$j][4]) - 2) {
                                            echo ", ";
                                        } else if ($k == count($projetos[$i][$j][4]) - 2) {
                                            echo " e ";
                                        }
                                    }
                                } else {
                                    echo 'Responsável:</strong> ';
                                    echo $projetos[$i][$j][4][0];
                                }

                                echo '<br>
                                <strong>';

                                if (count($projetos[$i][$j][5]) > 1) {
                                    echo 'Orientadores:</strong> ';
                                    for ($k = 0; $k < count($projetos[$i][$j][5]); $k++) {
                                        echo $projetos[$i][$j][5][$k];
                                        if ($k < count($projetos[$i][$j][5]) - 2) {
                                            echo ", ";
                                        } else if ($k == count($projetos[$i][$j][5]) - 2) {
                                            echo " e ";
                                        }
                                    }
                                } else {
                                    echo 'Orientador:</strong> ';
                                    echo $projetos[$i][$j][5][0];
                                }

                                if (count($projetos[$i][$j][6]) > 1) {
                                    echo '<br>
                                    <strong>Banca:</strong> ';
                                    for ($k = 0; $k < count($projetos[$i][$j][6]); $k++) {
                                        echo $projetos[$i][$j][6][$k];
                                        if ($k < count($projetos[$i][$j][6]) - 2) {
                                            echo ", ";
                                        } else if ($k == count($projetos[$i][$j][6]) - 2) {
                                            echo " e ";
                                        }
                                    }
                                }
                                
                                echo '</p>
                            </div>';
                        }
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