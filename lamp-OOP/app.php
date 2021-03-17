<?php

require_once __DIR__ . '/Lamp.php';
require_once __DIR__ . '/Light.php';

$lamp = new Lamp(new Light);

$lamp->switch();
echo $lamp;

$lamp->switch();
echo $lamp;
