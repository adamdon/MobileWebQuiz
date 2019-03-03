<?php


class DataAccessObject
{
    public $arrayOfPlayers;
    public $arrayOfQuestions;

    public function __construct()
    {
        $this->arrayOfPlayers = [];
        $this->arrayOfQuestions = [];
    }






    public function getQuestions($strCategorySelected)
    {
        if ($strCategorySelected == "Capital Cities")
        {
            return $this->CapitalCityQuestions();
        }
        elseif ($strCategorySelected == "Movie Quotes")
        {
            return $this->MovieQuoteQuestions();
        }
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

    private function MovieQuoteQuestions()
    {
        $arrayOfQuestions = [];

        $question1 = new QuestionModel("We're Gonna Need a Bigger Boat", "Jaws");
        $question2 = new QuestionModel("Luke, I am Your Father", "Star Wars");
        $question3 = new QuestionModel("Roads? Where we're going, we don't need roads", "Back to the Future");
        $question4 = new QuestionModel("Hasta la vista, baby", "Terminator 2");
        $question5 = new QuestionModel("You shall not pass", "Lord of the Rings");
        $question6 = new QuestionModel("Heeere's Johnny!", "The Shining");
        $question7 = new QuestionModel("Life is like a box of chocolates", "Forest Gump");
        $question8 = new QuestionModel("Why so serious?", "The Dark Knight");
        $question9 = new QuestionModel("There's no place like home", "The Wizard of Oz");
        $question10 = new QuestionModel("Yer a wizard, Harry", "Harry Potter");
        $question11 = new QuestionModel("Wanna play a game?", "Saw");

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


        return $arrayOfQuestions;
    }


    public function getPlayers()
    {
        $arrayOfPlayers = [];

        $testPlayer1 = new PlayerModel("john", "pass", false);
        $testPlayer2 = new PlayerModel("jane", "pass", false);
        $testPlayer3 = new PlayerModel("boss", "pass", true);

        array_push($arrayOfPlayers, $testPlayer1);
        array_push($arrayOfPlayers, $testPlayer2);
        array_push($arrayOfPlayers, $testPlayer3);

        $this->arrayOfPlayers = $arrayOfPlayers;
        return $this->arrayOfPlayers;
    }

}