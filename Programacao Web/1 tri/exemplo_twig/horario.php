<?php
//horario.php

require('twig_carregar.php');

use Carbon\Carbon;

$data = Carbon::now('America/Sao_Paulo')
->locale('pt_BR')
->isoFormat('LLLL');

//->addDay() Soma um dia

echo $data;
die;

echo $twig->render(
    'horario.html'
    [
        'hoje' =>$data,
        'amanha' =>$amanha
    ]
);