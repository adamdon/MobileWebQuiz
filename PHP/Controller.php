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

    public $currentView;
    public $dAO;

    public function __construct()  //$model, $view)
    {
        $this->currentView = new View;
        $this->dAO = new DataAccessObject();

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

    public function outputNewGameHTML()
    {
        return $this->currentView->outputNewGameHTML(); //$cu
    }


}