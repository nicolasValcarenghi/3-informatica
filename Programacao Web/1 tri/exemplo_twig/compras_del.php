<?php

require('inc/banco.php');

$id = $_GET['id'];

if ($id) {
    
    $query = $pdo ->prepare('DELETE FROM compras WHERE id = :id');

    $query->bindValue(':id', $id);

    $query->execute();

    header('location:compras.php');
}
