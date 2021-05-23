<?php

require_once 'player.php';

$musics = new SplFixedArray(4);
$musics[0] = "One";
$musics[1] = "Blitzkrieg Bop";
$musics[2] = "Take On Me";
$musics[3] = "Is this Love";

$player = new Player();

$player->addMusic($musics);

$player->downloadMusic();