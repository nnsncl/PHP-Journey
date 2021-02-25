<?php

$db = new PDO('mysql:host=localhost;dbname=php-journey', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec('SET CHARACTER SET utf8');

$sql = 'SELECT * FROM membres';
$req = $db->query($sql);
$data = $req->fetchAll(PDO::FETCH_OBJ);

foreach($data as $membre) {
    echo $membre->prenom.' '.$membre->nom.'<br>';
};

$sql = 'SELECT * FROM membres LIMIT 1';
$req = $db->query($sql);
$data = $req->fetch(PDO::FETCH_OBJ);

echo '<pre>';
print_r($data);
echo '</pre>';

$id = 12;
$prenom = 'Ted';
$ville = 'New-York';

// $sql = "SELECT * FROM membres WHERE id = ? OR prenom = ? OR ville = ?";
// $req = $db->prepare($sql);
// $req->bindParam(1, $id);
// $req->bindParam(2, $prenom);
// $req->bindParam(3, $ville);
// $req->execute();
// $data = $req->fetchAll(PDO::FETCH_OBJ);
// foreach($data as $value) {
//     echo $value->prenom.' '.$value->nom.'<br>';
// };
 
$sql = "SELECT * FROM membres WHERE id = :id OR prenom = :prenom OR ville = :ville";
$req = $db->prepare($sql);
$req->bindParam('id', $id, PDO::PARAM_INT);
$req->bindParam('prenom', $prenom, PDO::PARAM_STR);
$req->bindParam('ville', $ville, PDO::PARAM_STR);
$req->execute();
while($data = $req->fetch(PDO::FETCH_OBJ)) {
    echo $data->prenom.' '.$data->nom.'<br>';
};