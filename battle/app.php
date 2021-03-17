<?php

require_once __DIR__ . '/Battle.php';

$battle = new Battle;

$cards = range(1, 52);

foreach (range(1, 14) as $item) {
    echo '<pre>';
    print_r($battle->textCard($item));
    echo '</pre>';
}
