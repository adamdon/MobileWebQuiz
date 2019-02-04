<?php
//include 'PHP/QuestionModel.php';
include 'PHP/Controller.php';
//include 'PHP/View.php';


if(isset($_GET['request']))
{
    $passedVar = $_GET['request'];


    $controller = new Controller();


    if ($passedVar == "a")
    {
        echo $controller->GetAnswer(0);
    }
    else if ($passedVar == "q")
    {
        echo $controller->GetQuestion(0);
    }


}