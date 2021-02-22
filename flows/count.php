<?php

$file = 'count.txt';
$counter = 0;

$f = fopen($file, 'r+');
$content = fgets($f);

$content++;

// Seek for the begenning of the file and trigger it
fseek($f, 0); 
fwrite($f, $content);

fclose($f);
