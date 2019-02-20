<?php


class DataAccessObject
{
    public $question1;
    public $question2;
    public $question3;
    public $question4;
    public $question5;
    public $question6;
    public $question7;
    public $question8;
    public $question9;
    public $question10;
    public $question11;
    public $question12;
    public $question13;

    public $arrayOfQuestions;

    public function __construct()
    {

    }

    public function setupQuestions()
    {
        $this->question1 = new QuestionModel("What is the capital of France", "Paris");
        $this->question2 = new QuestionModel("What is the capital of Germany", "Berlin");
        $this->question3 = new QuestionModel("What is the capital of Italy", "Rome");
        $this->question4 = new QuestionModel("What is the capital of Spain", "Madrid");
        $this->question5 = new QuestionModel("What is the capital of Austria", "Vienna");
        $this->question6 = new QuestionModel("What is the capital of Belgium", "Brussels");
        $this->question7 = new QuestionModel("What is the capital of Czech Republic", "Prague");
        $this->question8 = new QuestionModel("What is the capital of Denmark", "Copenhagen");
        $this->question9 = new QuestionModel("What is the capital of Estonia", "Tallinn");
        $this->question10 = new QuestionModel("What is the capital of Norway", "Oslo");
        $this->question11 = new QuestionModel("What is the capital of Poland", "Warsaw");
        $this->question12 = new QuestionModel("What is the capital of Sweden", "Stockholm");
        $this->question13 = new QuestionModel("What is the capital of Portugal", "Lisbon");


        $this->arrayOfQuestions = array($this->question1, $this->question2, $this->question3, $this->question4, $this->question5);
        array_push($this->arrayOfQuestions,  $this->question6);
        array_push($this->arrayOfQuestions,  $this->question7);
        array_push($this->arrayOfQuestions,  $this->question8);
        array_push($this->arrayOfQuestions,  $this->question9);
        array_push($this->arrayOfQuestions,  $this->question10);
        array_push($this->arrayOfQuestions,  $this->question11);
        array_push($this->arrayOfQuestions,  $this->question12);
        array_push($this->arrayOfQuestions,  $this->question13);

        return $this->arrayOfQuestions;
    }

}