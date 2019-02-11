<?php
//include 'PHP/QuestionModel.php';
include 'PHP/Controller.php';
//include 'PHP/View.php';


if( (isset($_GET['request'])) && (isset($_GET['q']))  ) //&& (isset($_GET['request'])) && (isset($_GET['q'])) )
{
    $passedRequestVar = $_GET['request'];
    $passedParameterVar = (int)$_GET['q'];


    $controller = new Controller();


    if ($passedRequestVar == "answer")
    {
        echo $controller->GetAnswer($passedParameterVar);
    }
    else if ($passedRequestVar == "question")
    {
        echo $controller->GetQuestion($passedParameterVar);
    }
    else if ($passedRequestVar == "newGame")
    {
        echo $controller->outputNewGameHTML();
    }
    else if ($passedRequestVar == "startSession")
    {
        echo $controller->outputStartSessionHTML();
    }




}