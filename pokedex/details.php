<?php

$db = new PDO('mysql:host=localhost;dbname=php-journey', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec('SET CHARACTER SET utf8');

$pokemon_id = $_GET['id'];
$sql = "SELECT * FROM pokemon WHERE id = :id";
$req = $db->prepare($sql);
$req->bindParam('id', $pokemon_id, PDO::PARAM_INT);
$req->execute();

$data = $req->fetch(PDO::FETCH_OBJ);

if($data->evolution) {
    $sql = "SELECT * FROM pokemon WHERE id = $data->evolution";
    $req = $db->query($sql);
    $data_evolve = $req->fetch(PDO::FETCH_OBJ);
    $evolution = "<p>".$data->nom.": Evoluton - ".$data_evolve->nom."</p>";
}

include 'details.tpl.php';