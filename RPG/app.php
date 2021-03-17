<?php
require_once __DIR__ . '/Game/Game.php';
require_once __DIR__ . '/Game/Player.php';
require_once __DIR__ . '/Game/Dragon.php';
require_once __DIR__ . '/Game/Knight.php';

// on fixe les paramètres du jeu

$dragon = new Dragon;

$dragon->setName('Dragon');
$dragon->setLife(100);
$dragon->setForce(0.4);

$knight = new Knight;
$knight->setName('Knight');
$knight->setLife(110);
$knight->setForce(0.35);

$game = new Game($dragon, $knight);

// on lance le jeu
$game->run();

// On affiche les statistiques du jeu
echo '<pre>';
print_r($game);
print_r($game->isWinner());
echo '</pre>';