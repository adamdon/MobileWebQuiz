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

        $this->arrayOfRounds = $this->setupRounds($numberOfRoundsToBePlayed);
    }

    //to-do: make work with more than 1 round via Random()
    public function setupRounds($numberOfRoundsToBePlayed)
    {
        $arrayOfFilledRounds = array(null);
        for ($index = 0; $index < $numberOfRoundsToBePlayed; $index++)
        {
            $questionCorrect = $this->arrayOfQuestions[0];
            $questionWrongA = $this->arrayOfQuestions[1];
            $questionWrongB = $this->arrayOfQuestions[2];

            $roundToBeAdded = new RoundModel($questionCorrect, $questionWrongA, $questionWrongB);
            array_push($arrayOfFilledRounds, $roundToBeAdded);
        }

        return $arrayOfFilledRounds;

    }



}