<?php
include 'PHP/QuestionModel.php';
include 'PHP/Controller.php';
include 'PHP/View.php';


if(isset($_GET['request']))
{
    $passedVar = $_GET['request'];

    $question1 = new QuestionModel("what is 2 + 2", "4");
    $view = new View($question1);
    $controller = new Controller($question1, $view);


    if ($passedVar == "a")
    {
        echo $controller->GetAnswer();
    }
    else if ($passedVar == "q")
    {
        echo $controller->GetQuestion();
    }


}