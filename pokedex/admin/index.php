<?php

$db = new PDO('mysql:host=localhost;dbname=php-journey', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec('SET CHARACTER SET utf8');

$sql = "SELECT * from pokemon";
$req = $db->query($sql);
$data = $req->fetchAll(PDO::FETCH_OBJ);

foreach($data as $pokemon){
    $imageUrl = $pokemon->image;
    $id = $pokemon->id;
    echo "
        <tr>
            <td><img  style='height: 10%;' src='{$imageUrl}'/></td>
            <td>$pokemon->nom</td>
            <td>
                <a href='edit.php?id=$id'>Modifier</a>
                <a href='delete.php?id=$id'>Supprimer</a>
            </td>
        </tr><br>
        ";
}

include 'index.tpl.php';