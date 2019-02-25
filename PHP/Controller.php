<?php

include 'View.php';
include 'DataAccessObject.php';

include 'Models/QuestionModel.php';
include 'Models/PlayerModel.php';
include 'Models/GameModel.php';
include 'Models/RoundModel.php';

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
        $this->testPlayer = new PlayerModel("jonny5", "pass");

        $this->arrayOfQuestions = []; //$this->dAO->setupQuestions();
    }


    public function startSession()
    {
        return $this->currentView->getStartSessionHTML(); //$cu
    }

    public function logIn($strEmail, $strPassword)
    {
        if(($strEmail == $this->testPlayer->username) && ($strPassword == $this->testPlayer->password) )
        {
            return $this->currentView->getGameSelectHTML();
        }
        else
        {
            return $this->currentView->getStartSessionHTML();
        }

        return $this->currentView->getStartSessionHTML(); //$cu
    }

    public function newGame($numberOfRoundsToBePlayed, $strCategorySelected)
    {
        $this->arrayOfQuestions = $this->dAO->setupQuestions($strCategorySelected);
        $this->currentGame = new GameModel($this->testPlayer, $numberOfRoundsToBePlayed, $this->arrayOfQuestions);
        return $this->currentView->getQuestionScreenHTML($this->currentGame);
    }

    public function submitAnswer($radioSelected)
    {
        $this->currentGame->submitAnswer($radioSelected);
        return $this->currentView->getQuestionScreenHTML($this->currentGame);
    }

    public function nextRound()
    {
        $this->currentGame->nextRound();
        if($this->currentGame->numberOfCurrentRound < $this->currentGame->numberOfRoundsToBePlayed)
        {
            return $this->currentView->getQuestionScreenHTML($this->currentGame);
        }
        else
        {
            //$this->currentGame = null; //null to save on session memory later on
            return $this->currentView->getGameFinishedHTML($this->currentGame);

        }

    }




    //Private functions here
    //


}