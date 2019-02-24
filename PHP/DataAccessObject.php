<?php


class DataAccessObject
{

    public function __construct()
    {

    }

    public function setupQuestions()
    {


        return $this->CapitalCityQuestions();
    }


    private function CapitalCityQuestions()
    {
        $arrayOfQuestions = [];

        $question1 = new QuestionModel("What is the capital of France", "Paris");
        $question2 = new QuestionModel("What is the capital of Germany", "Berlin");
        $question3 = new QuestionModel("What is the capital of Italy", "Rome");
        $question4 = new QuestionModel("What is the capital of Spain", "Madrid");
        $question5 = new QuestionModel("What is the capital of Austria", "Vienna");
        $question6 = new QuestionModel("What is the capital of Belgium", "Brussels");
        $question7 = new QuestionModel("What is the capital of Czech Republic", "Prague");
        $question8 = new QuestionModel("What is the capital of Denmark", "Copenhagen");
        $question9 = new QuestionModel("What is the capital of Estonia", "Tallinn");
        $question10 = new QuestionModel("What is the capital of Norway", "Oslo");
        $question11 = new QuestionModel("What is the capital of Poland", "Warsaw");
        $question12 = new QuestionModel("What is the capital of Sweden", "Stockholm");
        $question13 = new QuestionModel("What is the capital of Portugal", "Lisbon");

        array_push($arrayOfQuestions, $question1);
        array_push($arrayOfQuestions, $question2);
        array_push($arrayOfQuestions, $question3);
        array_push($arrayOfQuestions, $question4);
        array_push($arrayOfQuestions, $question5);
        array_push($arrayOfQuestions, $question6);
        array_push($arrayOfQuestions, $question7);
        array_push($arrayOfQuestions, $question8);
        array_push($arrayOfQuestions, $question9);
        array_push($arrayOfQuestions, $question10);
        array_push($arrayOfQuestions, $question11);
        array_push($arrayOfQuestions, $question12);
        array_push($arrayOfQuestions, $question13);

        return $arrayOfQuestions;
    }

}