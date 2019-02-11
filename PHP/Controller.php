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

    public function GetAnswer($QuestionNumber)
    {
        return $this->arrayOfQuestions[$QuestionNumber]->strAnswer;
    }

    public function GetQuestion($QuestionNumber)
    {
        return $this->arrayOfQuestions[$QuestionNumber]->strQuestion;
    }

    public function outputStartSessionHTML()
    {
        return $this->currentView->getStartSessionHTML(); //$cu
    }

    public function outputNewGameHTML()
    {
        $this->currentGame = new GameModel($this->testPlayer,1, $this->arrayOfQuestions);
        return $this->currentView->getNewGameHTML($this->currentGame);
    }

    public function outputSubmitAnswerHTML($radioSelected)
    {
        //$this->currentGame = new GameModel($this->testPlayer,1, $this->arrayOfQuestions); //remove for new game
        $this->currentGame->submitAnswer($radioSelected);
        return $this->currentView->getNewGameHTML($this->currentGame);
    }


}