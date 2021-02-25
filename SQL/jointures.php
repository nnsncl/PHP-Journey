<?php

$db = new PDO('mysql:host=localhost;dbname=php-journey', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec('SET CHARACTER SET utf8');

    // $sql = "SELECT prenom, nom, AVG(note) AS moyenne, trimestre FROM membres RIGHT JOIN interro ON membres.id = interro.id_membre GROUP BY interro.id_membre, trimestre";
    // $req = $db->query($sql);
    // $data = $req->fetchAll(PDO::FETCH_OBJ);

    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';

    $sql = "SELECT prenom, nom, (SELECT COUNT(*) FROM interro WHERE id_membre = membres.id GROUP BY id_membre) as nbInterro FROM membres";
    $req = $db->query($sql);
    $data = $req->fetchAll(PDO::FETCH_OBJ);

    echo '<pre>';
    print_r($data);
    echo '</pre>';

    $sql = "SELECT MAX(moyenne) FROM (SELECT AVG(note) AS moyenne FROM interro GROUP BY id_membre) as i";
    $req = $db->query($sql);
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    
    echo '<pre>';
    print_r($data);
    echo '</pre>';