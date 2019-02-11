<?php

class GameModel
{
    public $player;
    public $numberOfRoundsToBePlayed;

    public $arrayOfRounds;
    public $arrayOfQuestions;
    public $numberOfCurrentRound;
    public $textOfStatus;

    public $numberOfScore;

    public function __construct($player, $numberOfRoundsToBePlayed, $arrayOfQuestions) //, $arrayOfRounds)
    {
        $this->player = $player;
        $this->numberOfRoundsToBePlayed = $numberOfRoundsToBePlayed;
        $this->arrayOfQuestions = $arrayOfQuestions;

        $this->arrayOfRounds = $this->setupRounds($numberOfRoundsToBePlayed);
        $this->numberOfCurrentRound = 0;
        $this->textOfStatus = "Game Start!";
        $this->numberOfScore = 0;
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

    public function submitAnswer($radioSelected)
    {
        $radioSelected = (int)$radioSelected;
        if($radioSelected == 1)
        {
            $this->answerCorrect();
        }
        else
        {
            $this->answerWrong();
        }

        $this->nextRound();
    }

    public function answerCorrect()
    {
        $this->numberOfScore = ($this->numberOfScore + 1);
        $this->textOfStatus = "Correct!";
    }

    public function answerWrong()
    {
        $this->textOfStatus = "Wrong!";
    }

    public function nextRound()
    {
        $this->numberOfCurrentRound = ($this->numberOfCurrentRound + 1);
    }





}