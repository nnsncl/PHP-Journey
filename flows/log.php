<!--
Create a log file

When a refresh occurs, add a new line in the log file.
- Date and hour,
- User IP Address,
- User Browser
- Create a new file every day
-->

<?php

$file = date('d-m-y').'-log.txt';

$f = fopen($file, 'a+');
$date = date('d-m-y-H:i');
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$browser = $_SERVER['HTTP_USER_AGENT'];

$content = $date.' | '.$hostname .' | '.$browser."\n";

fwrite($f, $content);
fclose($f);
