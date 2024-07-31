<?php

require_once('../database/conn.php');

$descripton = filter_input(INPUT_POST, 'description');
$id = filter_input(INPUT_POST, 'id');

if($descripton && $id){
    $sql = $pdo->prepare('UPDATE task SET description = :description WHERE id = :id');
    $sql->bindValue(':description', $descripton);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('Location: ../index.php');
    exit;
} else{
    header('Location: ../index.php');
    exit;
}


?>