<?php

require 'ranking.php';
require 'player.php';
require 'music.php';

$musics = new SplFixedArray(4);

$musics[0] = new Music("One");
$musics[1] = new Music("Is this Love");
$musics[2] = new Music("Take On Me");
$musics[3] = new Music("Blitzkrieg Bop");

$player = new Player();

$player->addMusic($musics);

$player->play();
$player->play();
$player->play();
$player->play();

$player->next();

$player->play();
$player->play();

$player->next();

$player->play();
$player->play();
$player->play();

$player->next();

$player->play();

$player->listRanking();