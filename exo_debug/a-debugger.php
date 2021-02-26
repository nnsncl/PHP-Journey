<?php 

$T_types = ['Fruit', 'Légume'];

$db = new PDO('mysql:host=localhost;dbname=php-journey', 'root', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$db->exec('SET CHARACTER SET utf8');


$sql = "SELECT `nom`, `type` FROM `fruitsetlegumes`";
$req = $db->query($sql) or die();

while($data = $req->fetch()) {
	$nom	= $data->nom;
	$type	= $data->type;
	
	echo $nom . ' est un '. $T_types[$type - 1].'<br/>';
}