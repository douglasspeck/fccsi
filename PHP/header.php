<?php

    $active_page = str_replace('.php', '', $_SERVER['REQUEST_URI']);
    $active_page = str_replace('/', '', $active_page);

    if ($active_page !== '') {
        echo    '<input type="checkbox" id="header-toggle" class="sandwich">
            <label for="header-toggle" class="sandwich">
                <span class="sandwich icon"></span>
                <span class="sandwich icon"></span>
                <span class="sandwich icon"></span>
            </label>';
    }

    echo    '<header>
                <div class="nav-container montserrat">
                    <a href="" class="logo"><img class="logo" src="IMG/logo.png" alt="Logo da FCCSI"/></a>
                    <nav class="upper">';
    
    $pages = ['Home', 'Blog', 'Passagens', 'Hotéis', 'Pacotes', 'Mapas', 'Contato'];

    $page_links = ['/', 'blog', 'projetos', 'atividades', 'galeria', 'mapas', 'contato'];

    for ($i = 0; $i < count($pages); $i++) {

        echo '<a href="' . $page_links[$i];

        if ($isLocal == true && $page_links[$i] !== '/' && $page_links[$i] !== '') {
            echo '.php';
        }

        echo '" class="page';

        if ($page_links[$i] == $active_page && $active_page !== '') {
            echo ' active';
        };
        if ($active_page == '' && $i == 0) {
            echo ' active';
        }
        echo '">' . $pages[$i] . '</a>';
    }
    echo    '</nav>
        </div>
    </header>'

?>