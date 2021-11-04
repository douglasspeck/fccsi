<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        include 'PHP/data.php';

        $title = 'FCCSI | Feira Cultural e Científica Salesiano Itajaí';
        $keywords = 'FCCSI, Feira, Feirinha, Salesiano, Itajaí';
        $css = ['main', 'fonts',  'header', 'homepage', 'homepage-mobile', 'alignment', 'footer'];
        $js = ['countdown'];
        include 'PHP/head.php';
    ?>
    <body>
        <input type="checkbox" id="header-toggle" class="sandwich">
        <label for="header-toggle" class="sandwich">
            <span class="sandwich icon"></span>
            <span class="sandwich icon"></span>
            <span class="sandwich icon"></span>
        </label>
        <div class="home-header">
            <div class="header-background">
                <?php
                    $banner_image = rand(0, 4);
                    $banner_sizes = [
                        ["200","660","919","1142","1355","1524","1683","1834","1971","2102","2233","2364","2476","2595","2705","2817","2921","3022","3126","3228","3327","3548","3643","3738","3832","3839","3840"],
                        ["200","582","806","1000","1182","1333","1471","1596","1722","1833","1940","2049","2150","2259","2351","2446","2537","2624","2806","2793","2883","2967","3048","3132","3328","3387","3425","3494","3564","3623","3690","3836","3840"],
                        ["190","640","1162","1169","1278","1367","1671","1786","1973","2032","2207","2330","2436","2566","2707","2681","2898","3001","3102","3203","3302","3343","3381","3472","3561","3633","3654","3707","3767","3779","3829","3840"],
                        ["200","600","858","1071","1264","1431","1591","1736","1875","2008","2134","2255","2381","2467","2455","2505","2594","2698","2793","2873","2934","2883","2984","3047","3123","3197","3225","3133","3143","3200","3275","3349","3411","3654","3727","3837","3840"],
                        ["200","550","780","979","1145","1291","1424","1549","1675","1790","1895","2003","2107","2204","2301","2390","2579","2673","2765","2847","2944","3027","3115","3198","3280","3351","3361","3407","3476","3543","3607","3668","3830","3837","3840"]
                    ];
                    echo '<img
                    id="banner-img"
                    sizes="(max-width: ' . $banner_sizes[$banner_image][count($banner_sizes[$banner_image])] . 'px) 100vw, ' . $banner_sizes[$banner_image][count($banner_sizes[$banner_image])] . 'px"
                    srcset="';
                    for ($i = 0; $i < count($banner_sizes[$banner_image]); $i++) {
                        echo 'IMG/header_bg_' . $banner_image . '_' . $banner_sizes[$banner_image][$i] . '.jpg ' . $banner_sizes[$banner_image][$i] . 'w,';
                    };
                    echo '"
                    src="IMG/header_bg_' . $banner_image . '_' . $banner_sizes[$banner_image][count($banner_sizes[$banner_image])] . '".jpg
                    alt="Paisagem">';
                ?>
            </div>
            <?php include 'PHP/header.php' ?>
            <h1 class="xg-title white yeseva">
                A FCCSI está chegando.<br>
                Embarque conosco nessa
                viagem!
            </h1>
            <p class="atribuition right montserrat">Foto por <a href="https://unsplash.com/@willianjusten?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" class="link" target="_blank">Willian <br class="no-mobile">Justen de Vasconcellos</a></p>
        </div>
        <div id="countdown" class="countdown-container">
            <div class="countdown-content">
                <h1 class="countdown title" id="days"></h1>
                    <h2 class="cd-label pp-title">dias</h2>
                <h1 class="countdown title" id="hours"></h1>
                    <h2 class="cd-label pp-title">horas</h2>
                <h1 class="countdown title" id="minutes"></h1>
                    <h2 class="cd-label pp-title">minutos</h2>
                <h1 class="countdown title" id="seconds"></h1>
                    <h2 class="cd-label pp-title">segundos</h2>
            </div>
        </div>

        <main>

            <section class="news banner">
                <article class="space-between v-center" id="article01">
                    <div class="image-wrapper">
                        <?php 
                        
                            $news_image = rand(1, 13);
                            echo '<img src="IMG/projeto-'. $news_image . '.webp" alt="Projeto da FCCSI 2019">'

                        ?>
                    </div>
                    <div class="text-wrapper v-center">
                        <h1 class="p-title upper bold">Monte seu cronograma e inscreva-se na FCCSI!</h2>
                        <p class="p-text">
                            A FCCSI 2021 está chegando e com ela a sua chance de trilhar seu
                            próprio caminho. Junto aos projetos expostos, os alunos participarão
                            de Atividades Integradoras. Para escolher as atividades em que
                            deseja participar, preencha o formulário abaixo com suas informações.
                        </p>
                        <p><strong>
                            O Formulário estará disponível entre as 13:00 do dia 13/10 e as 23:59 do dia 15/10.
                        </strong></p>
                        <a target="_blank" role="button" href="https://docs.google.com/forms/d/e/1FAIpQLSdOXwPFbKz5hNCVSFqpeVFhXXmf7KCIvV-Gq5y8lNVTEn55Lw/viewform?usp=sf_link">Quero participar!</a>
                        <p class="p-text center"><a class="link" href="atividades<?php if ($isLocal == true) {echo '.php';}?>">Cronograma de Atividades</a></p>
                    </div>
                </article>
                <article id="article02"></article>
            </section>

            <hr>

            <section>
                <h1 class="g-title upper center">O Projeto</h1>
                <p class="m-text under">
                    A FCCSI é um projeto interdisciplinar que busca promover o protagonismo,
                    o pensamento científico e a cultura através de exposições de trabalhos,
                    da realização de apresentações artísticas e outras ferramentas.
                    Todas as atividades são desenvolvidas pelo <strong>Comitê de organização</strong>,
                    que conta com <?php echo count($comite_alunos) ?> alunos do 1º ao 3º ano do EM
                    e
                    <?php 
                    if (count($comite_professores) > 1) {
                        if ($comite_professores_is_fem == true) {
                            echo "as professoras ";
                        } else {
                            echo "os professores ";
                        }
                        for ($i = 0; $i < count($comite_professores); $i++) {
                            echo $comite_professores[$i];
                            if ($i < count($comite_professores) - 1) {
                                echo " e ";
                            }
                        }
                    } else {
                        if ($comite_professores_is_fem == true) {
                            echo "a professora ";
                        } else {
                            echo "o professor ";
                        }
                        echo $comite_professores[0];
                    }
                    echo ". ";
                    ?>
                    O projeto tem duração de uma semana,
                    com atividades diversas que acontecem nos períodos matutino.</p>
            </section>

            <hr>

            <section class="banner">
                <div class="icon-title">
                    <img
                        class="title-icon"
                        sizes="(max-width: 105px) 100vw, 105px"
                        srcset="
                            IMG/clock_50.png 50w,
                            IMG/clock_105.png 105w"
                        src="IMG/clock.svg"
                        alt="Ícone de Relógio"
                    ></img>
                    <h1 class="g-title upper center">Programação</h1>
                </div>
                <div class="space-between triple">
                    <div class="text-wrapper">
                        <h2 class="p-title center">Apresentação de Projetos</h2>
                        <p class="p-text">
                            Nos dias 26 a 28 a Feira contará com vários trabalhos expositivos
                            elaborados pelos alunos do colégio, orientados por seus professores.
                        </p>
                    </div>
                    <div class="text-wrapper">
                        <h2 class="p-title center">Atividades Integradoras</h2>
                        <p class="p-text">
                            Durante todo o evento acontecem diversos cursos, palestras, rodas de conversa
                            e concursos. Essas atividades são ministradas por professores, convidados externos e até mesmo alunos.
                        </p>
                    </div>
                    <div class="text-wrapper">
                        <h2 class="p-title center">Exposição de Trabalhos</h2>
                        <p class="p-text">
                        As exposições são projetos que serão expostos sem apresentação oral ou intermediador
                        entre o projeto e o espectador. Essa proposta tem o objetivo de valorizar tanto os 
                        projetos feitos em sala quanto as habilidades visuais dos alunos
                        </p>
                    </div>
                </div>
            </section>

            <section>
                <iframe class="youtube" src="https://www.youtube.com/embed/cB6Z77oSi9I" title="Reprodutor de vídeo do YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="space-between">
                    <iframe class="youtube double" src="https://www.youtube.com/embed/nHtY_11Ff4U" title="Reprodutor de vídeo do YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe class="youtube double" src="https://www.youtube.com/embed/bGdJepAHRTw" title="Reprodutor de vídeo do YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>

        </main>

        <?php include 'PHP/footer.php' ?>

    </body>
</html>