<?php

class Ranking extends SplHeap
{
    public function compare(Music $music1, Music $music2)
    {
        if($music1->getTimesPlayed() === $music2->getTimesPlayed())
        {
            return 0;
        }

        if($music1->getTimesPlayed() < $music2->getTimesPlayed())
        {
            return -1;
        }
        else
        {
            return 1;
        }
    }
}
