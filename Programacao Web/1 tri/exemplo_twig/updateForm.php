<?php

require('twig_carregar.php');

echo $twig->render(
    'formUpdate.html',
    [
        "id" => $_GET['id'],
        "item" => $_GET['item']
    ]
);