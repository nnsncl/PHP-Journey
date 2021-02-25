<?php

$db = new PDO('mysql:host=localhost;dbname=php-journey', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec('SET CHARACTER SET utf8');

if (!empty($_GET['id'])) {
    $idPokemon = $_GET['id'];

    $sql = "SELECT * FROM pokemon WHERE id = :id";

    $req = $db->prepare($sql);
    $req->bindParam('id', $idPokemon, PDO::PARAM_INT);

    $req->execute();
    $data = $req->fetch(PDO::FETCH_OBJ);

    include 'edit.tpl.php';
}

if (!empty($_POST)) {
    extract($_POST);

    $sql = "UPDATE pokemon
            SET nom = :nom
            WHERE id = :id";

    $req = $db->prepare($sql);

    $req->bindParam('id', $id, PDO::PARAM_INT);
    $req->bindParam('nom', $nom, PDO::PARAM_STR);

    $req->execute();
    header('Location: ./');
}
