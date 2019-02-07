<?php

class GameModel
{
    public $player;
    public $numberOfRoundsToBePlayed;
    public $arrayOfRounds;
    public $arrayOfQuestions;

    public function __construct($player, $numberOfRoundsToBePlayed, $arrayOfQuestions) //, $arrayOfRounds)
    {
        $this->player = $player;
        $this->numberOfRoundsToBePlayed = $numberOfRoundsToBePlayed;
        $this->arrayOfQuestions = $arrayOfQuestions;
        $this->arrayOfRounds = setupRounds($numberOfRoundsToBePlayed);
    }

    public function setupRounds($numberOfRoundsToBePlayed)
    {
        $arrayOfFilledRounds = array(null);
        $questionCorrect = null;
        $questionWrongA = null;
        $questionWrongB = null;

        for ($index = 0; $index < $numberOfRoundsToBePlayed; $index++)
        {

        }

        return $arrayOfFilledRounds;
    }



}