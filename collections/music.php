<?php

class Music
{
    private $name;
    private $timesPlayed;

    public function __construct($name)
    {
        $this->name = $name;
        $this->timesPlayed = 0;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTimesPlayed()
    {
        return $this->timesPlayed;
    }

    public function playy()
    {
        echo "Now playing: " . $this->getName() . "<br>";
        $this->timesPlayed++;
    }
}