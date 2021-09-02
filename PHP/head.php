<?php

/* URL Methods */

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') { $url = "https://"; }  
else {$url = "http://"; }  
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];

$link = basename(__FILE__, '.php');
if ($link = 'index') {
    $link = '';
};

$official_website = false;

if (strpos($url, 'salesianoitajai') !== false) {
    $link = 'https://fccsi.salesianoitajai.g12.br/' . $link;
    str_replace('.php', '', $link);
    $official_website = true;
} else if (strpos($url, 'fccsi.online') !== false) {
    $link = 'https://fccsi.online/' . $link;
} else if (strpos($url, 'localhost') !== false) {
    $link = 'http://localhost:3000/' . $link;
}

echo
    '<head>
        <title>' . $title . '</title>
        
        <!-- META TAGS -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- SEO -->
        <meta name="author" content="Colégio Salesiano Itajaí">
        <meta name="description" content="Site Oficial da Feira Cultural e Científica Salesiano Itajaí">
        <meta name="keywords" content="' . $keywords . '">
        <link rel="canonical" href="' . $link . '">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Literata:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@0;1&display=swap" rel="stylesheet">';

        echo '<!-- CSS Stylesheets -->';
        for ($i = 0; $i < count($css); $i++) {
            echo '<link rel="stylesheet" href="CSS/' . $css[$i] . '.css" type="text/css">';
        };

        echo '<!-- Scrypts -->';
        for ($i = 0; $i < count($js); $i++) {
            echo '<script src="JS/' . $js[$i] . '.js"></script>';
        };
        
    echo '</head>';
?>