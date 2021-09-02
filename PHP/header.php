<?php

    echo
    '<header>
        <div class="nav-container montserrat">
            <a href="" class="logo"><img class="logo" src="IMG/logo.png" alt="Logo da FCCSI"/></a>
            <nav class="upper">';
    
    $pages = ['Home', 'Blog', 'Passagens', 'Hotéis', 'Pacotes', 'Mapas', 'Contato'];

    $page_links = ['/', 'blog', 'projetos', 'atividades', 'galeria', 'mapas', 'contato'];

    for ($i = 0; $i < count($pages); $i++) {

        echo '<a href="' . $page_links[$i];

        if ($official_website == false && $page_links[$i] !== '/' && $page_links[$i] !== '') {
            echo '.php';
        }

        echo '" class="page';

        $active_page = str_replace('.php', '', $_SERVER['REQUEST_URI']);
        $active_page = str_replace('/', '', $active_page);
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