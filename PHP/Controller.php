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
    public $arrayOfPlayers;

    public $currentGame;
    public $currentView;
    public $dAO;
    public $loginHelper;

    public function __construct()  //$model, $view)
    {
        $this->currentView = new View;
        $this->dAO = new DataAccessObject();
        $this->loginHelper = new LoginHelper();


        $this->currentGame = (object)[];
        $this->arrayOfQuestions = []; //$this->dAO->setupQuestions();
        $this->arrayOfPlayers = $this->dAO->getPlayers();

    }


    public function startSession() //first method ran from body onload
    {
        return $this->loadLogin();
    }


    public function loadLogin()
    {
        if($this->loginHelper->isPlayerLoggedIn == true) //check to see if loginHelper has a user logged in already
        {
            return $this->currentView->getGameSelectHTML($this->loginHelper->playerLoggedIn); //returns game select if logged in
        }
        else
        {
            return $this->currentView->getLoginScreenHTML(); // returns login screen if not logged in
        }
    }

    public function loadRegisterPage()
    {
        return $this->currentView->getRegisterScreenHTML();
    }



    public function logInUser($strEmail, $strPassword) //called when login button submits
    {
        if( ($this->loginHelper->isLoginValid($this->arrayOfPlayers, $strEmail, $strPassword)) == true) //checks in correct
        {
            return $this->currentView->getGameSelectHTML($this->loginHelper->playerLoggedIn);
        }
        else
        {
            return $this->currentView->getLoginScreenHTML();
        }

    }

    //TODO move logic to loginHelper
    public function registerNewDetails($strEmail, $strPassword)
    {
        $testPlayer1 = new PlayerModel($strEmail, $strPassword, false);
        array_push($this->arrayOfPlayers, $testPlayer1);
        return $this->loadLogin();
    }



    public function newGame($numberOfRoundsToBePlayed, $strCategorySelected) //called when login is successful
    {
        $this->arrayOfQuestions = $this->dAO->getQuestions($strCategorySelected);
        $this->currentGame = new GameModel($this->loginHelper->playerLoggedIn, $numberOfRoundsToBePlayed, $this->arrayOfQuestions);
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