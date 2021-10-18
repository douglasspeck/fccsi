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
                    echo '<img id="banner-img" src="IMG/header-bg-' . $banner_image . '.jpg"/>'
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
        <div class="countdown-container">
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
                    <img class="title-icon" src="IMG/clock.svg" alt="Ícone de Relógio"></img>
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