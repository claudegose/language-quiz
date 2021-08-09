<?php

class Player
{


    public string $name;
    public int $score;


    public function __construct(string $name = "👤", int $score)
    {

        $this->name = $name;
        $this->score = $score;
    }
}


$player = new Player($name, $score);