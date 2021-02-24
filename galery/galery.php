<?php

// echo '<pre>';
// print_r($_FILES);
// echo '</pre>';

$background_w = 150;
$background_h = 100;

list($file_w, $file_h) = getimagesize($_FILES['file']['tmp_name']);

$image = imagecreatefromjpeg($_FILES['file']['tmp_name']);
$background = imagecreatetruecolor($background_w, $background_h);

imagecopyresampled(
    $background,
    $image,
    0,
    0,
    0,
    0,
    $background_w,
    $background_h,
    $file_w,
    $file_h
);

// header('Content-type: image/jpeg');
imagejpeg($background, 'thumbs/'.$_FILES['file']['name'], 100);