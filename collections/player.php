<?php

class Player
{
    private $musics;

    public function __construct()
    {
        $this->musics = new SplDoublyLinkedList();
        $this->history = new SplStack();
        $this->downloadsQueue = new SplQueue();
        $this->musics->rewind();
        $this->ranking = new Ranking();
    }

    public function addMusic(SplFixedArray $musics)
    {
        for($musics->rewind(); $musics->valid(); $musics->next())
        {
            $this->musics->push($musics->current());
        }

        $this->musics->rewind();
    }

    public function play()
    {
        if($this->musics->count() == 0)
        {
            echo "ERROR!";
        }
        else
        {
            $this->history->push($this->musics->current());
            $this->musics->current()->playy();
        }
    }

    public function playLast()
    {
        echo "Playing from history: " . $this->history->pop() . "<br>";
    }

    public function next()
    {
        $this->musics->next();

        if(!$this->musics->valid())
        {
            $this->musics->rewind();
        }
    }

    public function prev()
    {
        $this->musics->prev();

        if(!$this->musics->valid())
        {
            $this->musics->rewind();
        }
    }

    public function list()
    {
        for($this->musics->rewind(); $this->musics->valid(); $this->musics->next())
        {
            echo "Music: " . $this->musics->current() . "<br>";
        }
    }

    public function counter()
    {
        echo "Amount of musics: " . $this->musics->count();
    }

    public function addFirstMusic($music)
    {
        $this->musics->unshift($music);
    }

    public function removeFirstMusic()
    {
        $this->musics->shift();
    }

    public function removeLastMusic()
    {
        $this->musics->pop();
    }

    public function downloadMusic()
    {
        if($this->musics->count() > 0)
        {
            for($this->musics->rewind(); $this->musics->valid(); $this->musics->next())
            {
                $this->downloadsQueue->push($this->musics->current());
            }
    
            for($this->downloadsQueue->rewind(); $this->downloadsQueue->valid(); $this->downloadsQueue->next())
            {
                echo "Downloading: " . $this->downloadsQueue->current() . "...<br>";
            }
        }
        else
        {
            echo "There are no musics to download!";
        }
    }

    public function __toString()
    {
        return $this->name;
    }

    public function listRanking()
    {
        foreach($this->musics as $music)
        {
            $this->ranking->insert($music);
        }

        foreach ($this->ranking as $music)
        {
            echo $music->getName() . " - " . $music->getTimesPlayed() . "<br>";
        }
    }
}
