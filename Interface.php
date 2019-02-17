<?php

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

    switch($passedRequestVar)
    {
        case "startSession": echo $controller->outputStartSessionHTML();
            break;
        case "newGame": echo $controller->outputNewGameHTML($passedParameterVar);
            break;
        case "submitAnswer": echo $controller->outputSubmitAnswerHTML($passedParameterVar);
            break;
        default:
            echo "Error, sorry";
    }

    $_SESSION["controller"] = serialize($controller);

}
