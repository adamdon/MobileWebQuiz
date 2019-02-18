<?php

include 'View.php';
include 'DataAccessObject.php';

include 'QuestionModel.php';
include 'PlayerModel.php';
include 'GameModel.php';
include 'RoundModel.php';

class Controller
{
    public $arrayOfQuestions;
    public $testPlayer;

    public $currentGame;
    public $currentView;
    public $dAO;

    public function __construct()  //$model, $view)
    {
        $this->currentView = new View;
        $this->dAO = new DataAccessObject();
        $this->testPlayer = new PlayerModel("Jonny5", "pass123");

        $this->arrayOfQuestions = $this->dAO->setupQuestions();
    }


    public function startSession()
    {
        return $this->currentView->getStartSessionHTML(); //$cu
    }

    public function newGame($numberOfRoundsToBePlayed)
    {
        $this->currentGame = new GameModel($this->testPlayer,$numberOfRoundsToBePlayed, $this->arrayOfQuestions);
        return $this->questionScreenHTML();
    }

    public function submitAnswer($radioSelected)
    {
        $this->currentGame->submitAnswer($radioSelected);
        return $this->questionScreenHTML();
    }

    public function nextRound()
    {
        $this->currentGame->nextRound();
        return $this->questionScreenHTML();
    }




    //Private functions here
    //
    private function questionScreenHTML()
    {
        return $this->currentView->getQuestionScreenHTML($this->currentGame);
    }

}