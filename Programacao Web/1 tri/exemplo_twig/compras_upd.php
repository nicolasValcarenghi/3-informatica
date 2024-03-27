<?php

require('inc/banco.php');

$id = $_GET['id'] ?? null;

if ($id) {
    $query = $pdo ->prepare('UPDATE compras SET item = :item WHERE id = :id');

    $query->bindValue(':id', $id);

    $query->execute();

    header('location:compras.php');
}