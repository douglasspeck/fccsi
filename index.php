<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>FCCSI | Feira Cultural e Científica Salesiano Itajaí</title>
        
        <!-- META TAGS -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- SEO -->
        <meta name="author" content="Colégio Salesiano Itajaí">
        <meta name="description" content="Site Oficial da Feira Cultural e Científica Salesiano Itajaí">
        <meta name="keywords" content="FCCSI, Feira, Feirinha, Salesiano, Itajaí">
        <link rel="canonical" href="https://fccsi.salesianoitajai.g12.br/">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Literata:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@0;1&display=swap" rel="stylesheet">


        <!-- CSS Stylesheets -->
        <link rel="stylesheet" href="CSS/body.css" type="text/css">
        <link rel="stylesheet" href="CSS/header.css" type="text/css">
        <link rel="stylesheet" href="CSS/fonts.css" type="text/css">

        <!-- Scrypts -->
        <script src="JS/countdown.js"></script>
        <?php include 'PHP/data.php' ?>
    </head>
    <body>
        <div class="home-header">
            <div class="header-background">
                <img src="IMG/header-bg.jpg"/>
            </div>
            <header>
                <div class="nav-container montserrat">
                    <a href="" class="logo"><img class="logo" src="IMG/logo.png" alt="Logo da FCCSI"/></a>
                    <nav class="quicksand upper">
                        <a href="" class="page active">
                            Home
                        </a>
                        <a href="" class="page">
                            Passagens
                        </a>
                        <a href="" class="page">
                            Hotéis
                        </a>
                        <a href="" class="page">
                            Pacotes
                        </a>
                        <a href="" class="page">
                            Mapas
                        </a>
                        <a href="" class="page">
                            Contato
                        </a>
                    </nav>
                </div>
            </header>
            <h1 class="xg-title white yeseva">
                A FCCSI está chegando.<br>
                Embarque conosco nessa
                viagem!
            </h1>
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

        <section class="news banner">
            <article class="flex v-center" id="article01">
                <div class="image-wrapper">
                    <img src="IMG/leandro-e-lucas.jpg" alt="Projeto de Gamificação para a FCCSI 2019">
                </div>
                <div class="text-wrapper">
                    <h1 class="p-title upper bold">Inscreva hoje mesmo a sua Atividade Integradora!</h2>
                    <p class="p-text">
                        A FCCSI 2021 está aceitando inscrições de Atividades Integradoras.
                        Essa é a sua chance de mostrar para o mundo aquilo que você domina,
                        seja na forma de palestra, concurso ou atividade interativa.
                    </p>
                    <a target="_blank" role="button" href="https://docs.google.com/forms/d/e/1FAIpQLSdBCH3A-nImpvRUuJQVB-J0krcIfPEX_SD1jRwtKwUQ2Ki89w/viewform?usp=sf_link">Quero participar!</a>
                    <p target="_blank" class="center"><a class="link" href="https://docs.google.com/forms/d/e/1FAIpQLSe6yZOukVRkRAJKPt1eIP_CC-Wz7kf7Ywo3ifekWUeaPUQ6Hw/viewform">Quero inscrever um Projeto!</a></p>
                </div>
            </article>
            <article id="article02"></article>
        </section>

        <hr>

        <section>
            <h1 class="beauty g-title upper center">O Projeto</h1>
            <p class="m-text under">
                A FCCSI é um projeto interdiciplinar que busca promover o protagonismo,
                o pensamento científico e a cultura através de exposições de trabalhos,
                da realização de apresentações artísticas e outras ferramentas.
                Todas as atividades são desenvolvidas pelo <strong>Comitê de organização</strong>,
                que conta com <?php echo count($comite) ?> alunos do 1º ao 3º ano do EM
                e as professoras Grazi e Sandra Pereira. O projeto tem duração de uma semana,
                com atividades diversas que acontecem nos períodos matutino.</p>
        </section>

        <hr>

        <section class="banner">
            <div class="icon-title">
                <img class="icon" src="IMG/clock.svg" alt="Ícone de Relógio"></img>
                <h1 class="g-title upper center">Programação</h1>
            </div>
            <div class="flex triple">
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
                        Durante todo o evento haverão diversos cursos, palestras, rodas de conversa
                        e concursos. Além disso, o evento contará com um mapa online interativo,
                        com diversos easter eggs preparados para você.
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
            <div class="flex">
                <iframe class="youtube double" src="https://www.youtube.com/embed/nHtY_11Ff4U" title="Reprodutor de vídeo do YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class="youtube double" src="https://www.youtube.com/embed/bGdJepAHRTw" title="Reprodutor de vídeo do YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <footer>
            <h1 class="p-title upper">Atribuições:</h1>
            <p>
                Fotos por <a href="https://unsplash.com/@willianjusten?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" class="link" target="_blank">Willian Justen de Vasconcellos</a> via <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" class="link" target="_blank">Unsplash</a> e <a href="https://www.freepik.com/pch.vector" class="link" target="_blank">pch.vector</a> via <a href="https://www.freepik.com/free-photos-vectors/design" class="link" target="_blank">Freepik</a>
            </p>
            <hr>
            <div class="logos">
                <!-- pode usar a tag span aqui para ajduar na formatação -->
                <a href="https://salesianoitajai.g12.br" target="_blank" title="Colégio Salesiano Itajaí"><img src="IMG/logo_csi.png" alt="Logo do Colégio Salesiano Itajaí"></a>
                <a href="https://fccsi.com.br" target="_blank" title="Nosso website antigo"><img src="IMG/logo.png" alt="Logo da FCCSI"></a>
                <a href="https://www.youtube.com/channel/UCzALoeT1DTkvuK6YyWNm0Wg" target="_blank" title="Nosso canal no YouTube"><img src="IMG/youtube.png" alt="Logo do YouTube"></a>
                <a href="mailto:contato.fccsi@gmail.com" target="_blank" title="Nosso email de contato"><img src="IMG/gmail.png" alt="Logo do Gmail"></a>
            </div>
        </footer>

    </body>
</html>