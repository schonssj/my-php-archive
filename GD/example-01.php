<?php

header("Content-Type: image/png");

$img = imagecreate(256, 256);

$black = imagecolorallocate($img, 0, 0, 0);

$red = imagecolorallocate($img, 255, 0, 0);

imagestring($img, 5, 60, 120, "PHP course", $red);

imagepng($img);

imagedestroy($img);
