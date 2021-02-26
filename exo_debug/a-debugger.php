<?php 

$T_types = ['Fruit', 'Légume'];

define('HOST',localhost);
define('USER','root');
define('PASS','root'); // changer en '' si vous êtes sur PC

define('DB_NAME','coursphp');

$db = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USER, PASS);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$db->exec('set names utf8');

$sql = "SELECT nom FROM fruitselegumes"
$req = $db->query($sql) or die();

while($data = $req->fetch())
{
	$nom	= $data->nm;
	$type	= $data->type;
	
	echo $nom . ' est un '. $T_types[$type]  '<br/';
	
}