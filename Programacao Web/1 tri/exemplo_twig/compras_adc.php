<?php

require('inc/banco.php');

$item = $_POST['item'];

if ($item) {
    $query = $pdo ->prepare('INSERT INTO compras (item) VALUES (:item)');

    $query->bindValue(':item', $item);

    $query->execute();

    header('location:compras.php');
}
