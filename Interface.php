<?php

//include 'PHP/Controller.php';
if (!isset($_SESSION["controller"]))
{
    session_start();
}

include 'PHP/Controller.php';

if( (isset($_GET['request'])) && (isset($_GET['q']))  )
{
    $passedRequestVar = $_GET['request'];
    $passedParameterVar = (int)$_GET['q'];


    if(empty($_SESSION["controller"]))
    {
        echo "session not found";
        $controllerTemp = new Controller();
        $_SESSION["controller"] = serialize($controllerTemp);
    }

    $controller = unserialize($_SESSION["controller"]);

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
    else if ($passedRequestVar == "startSession") //program start
    {
        echo $controller->outputStartSessionHTML();
    }
    else if ($passedRequestVar == "submitAnswer")
    {
        echo $controller->outputSubmitAnswerHTML($passedParameterVar);
    }

    $_SESSION["controller"] = serialize($controller);


}
