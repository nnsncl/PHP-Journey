<?php

$db = new PDO('mysql:host=localhost;dbname=php-journey', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec('SET CHARACTER SET utf8');

$pokemon_id = $_GET['id'];
$sql = "SELECT * FROM pokedex WHERE id = :id";
$req = $db->prepare($sql);
$req->bindParam('id', $pokemon_id, PDO::PARAM_INT);
$req->execute();

$data = $req->fetch(PDO::FETCH_OBJ);

include 'details.tpl.php';