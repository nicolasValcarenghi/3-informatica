<?php
require('twig_carregar.php');
require('inc/banco.php');

$compromissos = $pdo->query('SELECT * FROM compromissos');

echo $twig->render('compromissos.html', ["compromissos" => $compromissos]);

$compromissos = $compromissos->fetchAll(PDO::FETCH_ASSOC);