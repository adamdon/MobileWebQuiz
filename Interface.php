<?php

if (!isset($_SESSION["controller"]))
{
    session_start();
}
include 'PHP/Controller.php';

if( (isset($_GET['request'])) && (isset($_GET['p1']))  )
{
    $passedRequestVar = $_GET['request'];
    $passedParameterVar = (int)$_GET['p1'];

    if(empty($_SESSION["controller"]))
    {
        echo "session not found";
        $controllerTemp = new Controller();
        $_SESSION["controller"] = serialize($controllerTemp);
    }
    $controller = unserialize($_SESSION["controller"]);

    switch($passedRequestVar)
    {
        case "startSession": echo $controller->startSession();
            break;
        case "newGame": echo $controller->newGame($passedParameterVar);
            break;
        case "submitAnswer": echo $controller->submitAnswer($passedParameterVar);
            break;
        case "nextRound": echo $controller->nextRound();
            break;
        default:
            echo "Error, sorry";
    }

    $_SESSION["controller"] = serialize($controller);

}
