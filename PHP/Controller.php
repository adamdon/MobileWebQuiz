<?php

include 'QuestionModel.php';
include 'View.php';

class Controller
{
    public $question1;
    public $question2;
    public $question3;
    public $question4;

    public $arrayOfQuestions;

    public function __construct()  //$model, $view)
    {
        $this->setupQuestions();
    }

    public function setupQuestions()
    {
        $this->question1 = new QuestionModel("what is 2 + 2", "4");
        $this->question2 = new QuestionModel("what is 1 + 1", "2");
        $this->question3 = new QuestionModel("what is 1 + 4", "5");
        $this->question4 = new QuestionModel("what is 2 + 3", "5");

        $this->arrayOfQuestions = array($this->question1, $this->question2, $this->question3, $this->question4);
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


}