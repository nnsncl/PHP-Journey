<?php 

$db = new PDO('mysql:host=localhost;dbname=php-journey', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec('SET CHARACTER SET utf8');


if(!empty( $_GET['id'] )) {
    $idPokemon = $_GET['id'];

    $sql = "DELETE FROM pokemon WHERE id = :id";
    $req = $db->prepare($sql);
    $req->bindParam('id', $idPokemon, PDO::PARAM_INT);
    $req->execute();

    header('Location: ./');
}

