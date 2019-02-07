<?php

class GameModel
{
    public $player;
    public $numberOfRoundsToBePlayed;
    public $arrayOfRounds;

    public function __construct($player, $numberOfRoundsToBePlayed) //, $arrayOfRounds)
    {
        $this->player = $player;
        $this->numberOfRoundsToBePlayed = $numberOfRoundsToBePlayed;
        //$this->arrayOfRounds = $arrayOfRounds;
    }



}