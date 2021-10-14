<?php
/* Comitê */
    $comite_alunos = [
        'Amanda Karina',
        'Ana Júlia Herbst',
        'André Melo',
        'Carolina Vasconcellos',
        'Douglas Speck',
        'Eduarda Graciola',
        'Gustavo Bianchi',
        'Gustavo Venzon',
        'Luiza Maggio',
        'Manuela Leal',
        'Micaela',
        'Oscar Ferreira',
        'Pedro Schmitz Rodrigues'
    ];

    $comite_professores = ['Grazielle Silva', 'Sandra Severino'];

    // [true] se houverem apenas professoras mulheres.
    $comite_professores_is_fem = true;

    $comite = array_merge($comite_professores,$comite_alunos);



/* Função para corrigir a formatação do arquivo JSON */
function remove_utf8_bom($text)
    {
        $bom = pack('H*','EFBBBF');
        $text = preg_replace("/^$bom/", '', $text);
        return $text;
    }



/* Atividades Integradoras */
    
    $json = '';
    
    if( ini_get('allow_url_fopen') ) {
        $json = file_get_contents('https://drive.google.com/uc?id=1gvEcdAssEMU3UDtkvIELh4ZsEo-lH3lQ&export=download');
    }

    $json = remove_utf8_bom($json);

    $json_decode = json_decode($json);

    $atividades = array();

    for ($i = 0; $i < count($json_decode->atividades); $i++) {
        $atividades[$i] = [
            $json_decode->atividades[$i]->nome,
            $json_decode->atividades[$i]->categoria,
            $json_decode->atividades[$i]->data,
            $json_decode->atividades[$i]->horário,
            $json_decode->atividades[$i]->limite,
            $json_decode->atividades[$i]->responsáveis,
            $json_decode->atividades[$i]->descrição
        ];
    }

/* INFO 2021 */

    $dias = ['26/09','27/09','28/09'];

?>