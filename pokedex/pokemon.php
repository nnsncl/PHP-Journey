<?php

$db = new PDO('mysql:host=localhost;dbname=php-journey', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec('SET CHARACTER SET utf8');

$sql = "SELECT * from pokedex";
$req = $db->query($sql);
$data = $req->fetchAll(PDO::FETCH_OBJ);

foreach($data as $pokemon){
    $imageUrl = $pokemon->image;
    $id = $pokemon->id;
    echo "<a href='details.php?id=$id'><img src='{$imageUrl}'/><a/><h2>$pokemon->nom</h2>";
}

include 'index.tpl.php';
