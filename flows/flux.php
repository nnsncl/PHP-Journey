<?php

$file = 'flux.txt';

//r stands for Read Only
// r+ stands for Read + Write
// w stands for Write Only, overwrite the file content and replace by the new values
// w+ stands for Write and Read, overwrite the file. i<f the file doesn't exists, it'll be created.
// a stands for Read Only, it create a file if it doesn't existss
// a+ stands for Write and Read, create a file if it doesn't exists; Pointer's triggering the end of the file
$onpenFileFunction = fopen($file, 'a+');

// fwrite($onpenFileFunction, 'PHP Journey'."\n");
// fputs($onpenFileFunction, 'PHP Journey'."\n");
// $find = fgets($onpenFileFunction);

// while ($line = fgets($onpenFileFunction)) {
//     echo sprintf("<p>%s</p>", $line);
// }

$getAllFile = file_get_contents($file);
echo $getAllFile;


fclose($onpenFileFunction);

