<?php

require_once('../database/conn.php');

$descripton = filter_input(INPUT_POST, 'description');

if($descripton) {
    $sql = $pdo->prepare("INSERT INTO task (description) VALUES (:description)");
    $sql->bindValue(':description', $descripton);
    $sql->execute();

    header('Location: ../index.php');
    exit;
} else{
    header('Location: ../index.php');
    exit;
}

?>