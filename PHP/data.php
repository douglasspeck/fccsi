<?php
    /* Comitê */
    $comite_alunos = [
        'Amanda Karina',
        'Ana Júlia Herbst',
        'André Melo',
        'Carolina Vasconcellos',
        'Deivid Gabriel',
        'Douglas Speck',
        'Eduarda Graciola',
        'Gustavo Bianchi',
        'Gustavo Venzon',
        'Manuela Leal',
        'Oscar Ferreira',
        'Pedro Brumm',
        'Pedro Schmitz Rodrigues'
    ];

    $comite_professores = ['Grazielle Silva', 'Sandra Severino'];

    // [true] se houverem apenas professoras mulheres.
    $comite_professores_is_fem = true;

    $comite = array_merge($comite_professores,$comite_alunos);



    /* Atividades Integradoras */
    
    $json = file_get_contents('DATA/atividades.json');

    $json_decode = json_decode($json);

    $atividades = array();

    for ($i = 0; $i < count($json_decode->atividades); $i++) {
        $atividades[$i] = [
            $json_decode->atividades[$i]->nome,
            $json_decode->atividades[$i]->categoria,
            $json_decode->atividades[$i]->data,
            $json_decode->atividades[$i]->horário,
            $json_decode->atividades[$i]->descrição,
            $json_decode->atividades[$i]->responsáveis,
            $json_decode->atividades[$i]->imagem
        ];
    }

?>