<?php

include 'View.php';
include 'DataAccessObject.php';
include 'Helpers/LoginHelper.php';

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
    public $loginHelper;

    public function __construct()  //$model, $view)
    {
        $this->currentView = new View;
        $this->dAO = new DataAccessObject();
        $this->testPlayer = new PlayerModel("jonny5", "pass");

        $this->arrayOfQuestions = []; //$this->dAO->setupQuestions();
        $this->loginHelper = null;
    }


    public function startSession()
    {
        if($this->loginHelper == null)
        {
            return $this->currentView->getStartSessionHTML(); // returns login screen if not logged in
        }
        else
        {
            return $this->currentView->getGameSelectHTML(); //returns game select if logged in
        }


    }

    public function logIn($strEmail, $strPassword)
    {
        if(($strEmail == $this->testPlayer->username) && ($strPassword == $this->testPlayer->password) )
        {
            $this->loginHelper = new LoginHelper($this->testPlayer);
            return $this->currentView->getGameSelectHTML($this->loginHelper->playerLoggedIn);
        }
        else
        {
            return $this->currentView->getStartSessionHTML();
        }

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