<?php

// echo '<pre>';
// print_r($_FILES);
// echo '</pre>';

$background_w = 150;
$background_h = 100;

list($file_w, $file_h) = getimagesize($_FILES['file']['tmp_name']);

$image = imagecreatefromjpeg($_FILES['file']['tmp_name']);
$background = imagecreatetruecolor($background_w, $background_h);

if($file_w > $file_h) {
    $resized_thumb_w = $background_w;
    $resized_thumb_h = ceil($file_h * $resized_thumb_w / $file_w);

    $resized_background_w = $background_w;
    $resized_background_h = ceil($file_h * $background_w / $file_w);
} else {
    $resized_thumb_h = $background_h;
    $resized_thumb_w = ceil($file_w * $resized_thumb_h / $file_h);

    $resized_background_h = $background_h;
    $resized_background_w = ceil($file_w * $background_h / $file_h);
}

$pos_x = $background_w / 2 - $resized_thumb_w / 2;
$pos_y =  $background_h / 2 - $resized_thumb_h / 2;

imagecopyresampled(
    $background,
    $image,
    0,
    0,
    0,
    0,
    $resized_thumb_w,
    $resized_thumb_h,
    $file_w,
    $file_h
);

// header('Content-type: image/jpeg');
imagejpeg($background, 'thumbs/'.$_FILES['file']['name'], 100);