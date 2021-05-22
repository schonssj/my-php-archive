<?php

$img = imagecreatefromjpeg("certificate.jpg");

$titleColor = imagecolorallocate($img, 0, 0, 0);

$gray = imagecolorallocate($img, 100, 100, 100);

imagettftext($img, 32, 0, 320, 250, $titleColor, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICATE");

imagettftext($img, 32, 0, 375, 350, $titleColor, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "John Schools");

imagestring($img, 3, 440, 370, utf8_decode("Finished on: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($img);

imagedestroy($img);
