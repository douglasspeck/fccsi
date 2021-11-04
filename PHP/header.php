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
                    <a href="/" class="logo">
                        <img
                            class="logo"
                            sizes="(max-width: 1400px) 100vw, 1400px"
                            srcset="
                                IMG/logo_50.png 50w,
                                IMG/logo_200.png 200w,
                                IMG/logo_319.png 319w,
                                IMG/logo_418.png 418w,
                                IMG/logo_500.png 500w,
                                IMG/logo_585.png 585w,
                                IMG/logo_658.png 658w,
                                IMG/logo_725.png 725w,
                                IMG/logo_786.png 786w,
                                IMG/logo_853.png 853w,
                                IMG/logo_911.png 911w,
                                IMG/logo_966.png 966w,
                                IMG/logo_1020.png 1020w,
                                IMG/logo_1065.png 1065w,
                                IMG/logo_1114.png 1114w,
                                IMG/logo_1159.png 1159w,
                                IMG/logo_1218.png 1218w,
                                IMG/logo_1259.png 1259w,
                                IMG/logo_1317.png 1317w,
                                IMG/logo_1363.png 1363w,
                                IMG/logo_1400.png 1400w"
                            src="IMG/logo_1400.png"
                            alt="Logo da FCCSI"
                        />
                    </a>
                    <nav class="upper">';
    
    $pages = ['Home', 'Blog', 'Projetos', 'Atividades', 'Galeria', 'Mapas', 'Contato'];

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