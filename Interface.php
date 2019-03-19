<?php

if (!isset($_SESSION["controller"]))
{
    session_start();
}
include 'PHP/Controller.php';

if(isset($_GET['request'], $_GET['p1'], $_GET['p2']) == true)
{
    $passedRequestVar = $_GET['request'];
    $passedParameterVar1 = $_GET['p1'];
    $passedParameterVar2 = $_GET['p2'];


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
        case "loadRegisterPage": echo $controller->loadRegisterPage();
            break;
        case "loadLogin": echo $controller->loadLogin();
            break;
        case "registerNewDetails": echo $controller->registerNewDetails($passedParameterVar1, $passedParameterVar2);
            break;
        case "logIn": echo $controller->logInUser($passedParameterVar1, $passedParameterVar2);
            break;
        case "logOut": echo $controller->logOutUser();
            break;
        case "topScores": echo $controller->loadTopScoresPage();
            break;
        case "newGame": echo $controller->newGame($passedParameterVar1, $passedParameterVar2);
            break;
        case "submitAnswer": echo $controller->submitAnswer($passedParameterVar1);
            break;
        case "nextRound": echo $controller->nextRound();
            break;
        default:
            echo "Interface error - Request ' .$passedRequestVar .' not found, sorry";
    }

    $_SESSION["controller"] = serialize($controller);

}
