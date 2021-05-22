<?php

$img = imagecreatefromjpeg("certificate.jpg");

$titleColor = imagecolorallocate($img, 0, 0, 0);

$gray = imagecolorallocate($img, 100, 100, 100);

imagestring($img, 5, 450, 150, "CERTIFICATE", $titleColor);

imagestring($img, 5, 440, 350, "John Schools", $titleColor);

imagestring($img, 3, 440, 370, utf8_decode("Finished on: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($img, "certificate-" . date("Y-m-d") . ".jpg", 10);

imagedestroy($img);
