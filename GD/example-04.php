<?php

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$newWidth = 256;
$newHeight = 256;

list($oldWidth, $oldHeight) = getimagesize($file);

$newImg = imagecreatetruecolor($newWidth, $newHeight);

$oldImg = imagecreatefromjpeg($file);

imagecopyresampled($newImg, $oldImg, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);

imagejpeg($newImg);

imagedestroy($newImg);
imagedestroy($oldImg);
