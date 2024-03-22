<?php
use Twig\Environment;

//Carrega o carregador do Twig
require_once('twig_carregar.php');

//Mostrar o template na tela
echo $twig->render('index.html', [
    'fruta' => 'acerola',
]);