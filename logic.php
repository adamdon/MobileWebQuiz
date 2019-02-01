<?php
include 'QuestionModel.php';
include 'Controller.php';
include 'View.php';

$txt1 = "text from logic file";
$txt2 = "more text";

$question1 = new QuestionModel("what is 2 + 2", "4");

$controller = new Controller($question1);
$view = new View($controller, $question1);


echo $view->outputQuestion();
