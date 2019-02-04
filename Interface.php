<?php
include 'PHP/QuestionModel.php';
include 'PHP/Controller.php';
include 'PHP/View.php';


if(isset($_GET['request']))
{
    $question1 = new QuestionModel("what is 2 + 2", "4");
    $controller = new Controller($question1);
    $view = new View($controller, $question1);

    $passedVar = $_GET['request'];
    //echo "6" . $passedVar;

    if ($passedVar == "a")
        {
            echo "4 - var is a, for answer";
        }
    else if ($passedVar == "q")
        {
            echo $view->outputQuestion();
        }


}