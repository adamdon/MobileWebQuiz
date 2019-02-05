<?php
//include 'PHP/QuestionModel.php';
include 'PHP/Controller.php';
//include 'PHP/View.php';


if( (isset($_GET['request'])) && (isset($_GET['q']))  ) //&& (isset($_GET['request'])) && (isset($_GET['q'])) )
{
    $passedVar = $_GET['request'];
    $passedQuestionVar = $_GET['q'];


    $controller = new Controller();


    if ($passedVar == "answer")
    {
        echo $controller->GetAnswer($passedQuestionVar);
    }
    else if ($passedVar == "question")
    {
        echo $controller->GetQuestion($passedQuestionVar);
    }


}