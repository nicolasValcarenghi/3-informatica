<?php
use Carbon\Carbon;
require('twig_carregar.php');
require('inc/banco.php');

$compromissos = $pdo->query('SELECT * FROM compromissos');


$compromissos = $compromissos->fetchAll(PDO::FETCH_ASSOC);

foreach ($compromissos as $index => $compromisso) {
    $dataFormatada = Carbon::parse($compromisso['data']);
    if($dataFormatada -> isWeekend()) {
        $compromisso['fimDeSemana'] = 'Sim';
        $compromissos[$index] = $compromisso;
    }
    else{
        $compromisso['fimDeSemana'] = 'Não';
        $compromissos[$index] = $compromisso;
    }
}


echo $twig->render('compromissos.html', ["compromissos" => $compromissos]);