<?php

include 'QuestionModel.php';
include 'PlayerModel.php';
include 'GameModel.php';
include 'RoundModel.php';


include 'View.php';

class Controller
{
    public $question1;
    public $question2;
    public $question3;
    public $question4;
    public $question5;

    public $arrayOfQuestions;

    public $currentView;

    public function __construct()  //$model, $view)
    {
        $this->setupQuestions();
        $this->currentView = new View;

    }

    public function setupQuestions()
    {
        $this->question1 = new QuestionModel("What is the capital of France", "Paris");
        $this->question2 = new QuestionModel("What is the capital of Germany", "Berlin");
        $this->question3 = new QuestionModel("What is the capital of Italy", "Rome");
        $this->question4 = new QuestionModel("What is the capital of Spain", "Madrid");
        $this->question5 = new QuestionModel("What is the capital of Netherlands", "Amsterdam");


        $this->arrayOfQuestions = array($this->question1, $this->question2, $this->question3, $this->question4, $this->question5);
    }

    public function GetAnswer($QuestionNumber)
    {
        return $this->arrayOfQuestions[$QuestionNumber]->strAnswer;
        //return $this->question1->strAnswer;
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