<?php

require('inc/banco.php');

$descricao = $_POST['descricao'];
$data = $_POST['data'];

if ($descricao) {
    $query = $pdo ->prepare('INSERT INTO compromissos (descricao, data) VALUES (:descricao, :data)');

    $query->bindValue(':descricao', $descricao); 
    $query->bindValue(':data', $data);

    $query->execute();

    header('location:compromissos.php');
}