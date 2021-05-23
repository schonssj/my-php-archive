<?php

require_once "player.php";

$musics = new SplFixedArray(2);

$musics[0] = "One";
$musics[1] = "Blitzkrieg Bop";

$musics->setSize(4);

$musics[2] = "Take On Me";
$musics[3] = "Is this Love";

// echo $musics->getSize();

$player = new Player();

$player->addMusic($musics);

// $player->play();

// $player->next();

// $player->play();

// $player->counter();

$player->addFirstMusic("Kids");

$player->removeFirstMusic();

$player->removeLastMusic();

$player->list();