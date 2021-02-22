<?php

$f = fopen('position.txt', 'r');

while($c = fgetc($f)) {
    if ($c == 'o'){ echo ftell($f); }
    echo $c.'<br>';
}