<?php

require 'album.php';
require 'music.php';

$albums = new SplObjectStorage();

$neapolitan = new Album("Neapolitan");

$albums->attach($neapolitan);

$melted = new Album("Melted");

$albums->attach($melted);

// Do not contains duplicated items!
$albums->attach($neapolitan);

$musicsNeapolitan = new SplFixedArray(2);
$musicsNeapolitan[0] = new Music("Gutter Girl");
$musicsNeapolitan[1] = new Music("Jacuzzi");

$musicsMelted = new SplFixedArray(2);
$musicsMelted[0] = new Music("Caesar");
$musicsMelted[1] = new Music("Mrs");

$albums[$neapolitan] = $musicsNeapolitan;
$albums[$melted] = $musicsMelted;

foreach ($albums as $album)
{
    echo "Album: " . $album->getName() . "<br>";

    foreach ($albums[$album] as $music)
    {
        echo "Music: " . $music->getName() . "<br>";
    }

    echo "<br>";
}
