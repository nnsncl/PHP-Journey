<?php

// Get Medias sizes
list($background_w, $background_h) = getimagesize('images/' . $_POST['image']);
list($thumbs_w, $thumbs_h) = getimagesize('images/' . $_POST['timbre']);

// Get Medias
$card_background = imagecreatefromjpeg('images/' . $_POST['image']);
$thumb = imagecreatefrompng('images/' . $_POST['timbre']);

// Set the Thumbs position
$thumbs_x = $background_w - ($thumbs_w + 25);
$thumbs_y = 25;

// Transparent area scale
$transparentArea_w = $background_w - 50;
$transparentArea_h = $background_h * 0.33;

$transparentArea_x = $background_w / 2 - $transparentArea_w / 2;
$transparentArea_y = 3 / 5 * $background_h;

// Create transparent area
$transparent_area_ressource = imagecreate($transparentArea_w, $transparentArea_h);
// Apply color to the area
$transparent_area_color = imagecolorallocate($transparent_area_ressource, 255, 255, 255);

$type = 'palai.ttf';
$type_color = imagecolorallocate($card_background, 0, 0, 0);
$type_scale = 14;
$type_angle = 0;
$type_x_start = $transparentArea_x + 10;
$type_y_start = $transparentArea_y + ($transparentArea_h / 2);


// Merge Medias toghether
imagecopyresampled(
    $card_background,
    $thumb,
    $thumbs_x,
    $thumbs_y,
    0,
    0,
    $thumbs_w,
    $thumbs_h,
    $thumbs_w,
    $thumbs_h
);

imagecopymerge(
    $card_background,
    $transparent_area_ressource,
    $transparentArea_x,
    $transparentArea_y,
    0,
    0,
    $transparentArea_w,
    $transparentArea_h,
    60
);

imagettftext(
    $card_background,
    $type_scale,
    $type_angle,
    $type_x_start,
    $type_y_start,
    $type_color,
    $type,
    $_POST['message']
);

// Send an image to the browser
header('Content-type: image/jpeg');
// Create the final media
imagejpeg($card_background, null, 100);
