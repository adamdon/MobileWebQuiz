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

        //$this->arrayOfRounds = $this->setupRounds($numberOfRoundsToBePlayed);
        $this->arrayOfRounds = RoundModel::setupRounds($numberOfRoundsToBePlayed, $arrayOfQuestions);
        $this->numberOfCurrentRound = 0;
        $this->textOfStatus = "Game Start!";
        $this->numberOfScore = 0;
    }


    public function submitAnswer($radioSelected)
    {
        $radioSelected = (int)$radioSelected;
        if($radioSelected == $this->arrayOfRounds[$this->numberOfCurrentRound]->correctRadioNumber)
        {
            $this->answerCorrect();
        }
        else
        {
            $this->answerWrong();
        }

       // $this->nextRound();
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
        $this->textOfStatus = ("Next Question");
        $this->numberOfCurrentRound = ($this->numberOfCurrentRound + 1);
    }




}