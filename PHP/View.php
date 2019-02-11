<?php

class View
{
    private $model;

    public function __construct()
    {
        //$this->model = $model;

    }

    public function outputQuestion()
    {
        return $this->model->strQuestion;
        //return "<p>" . $this->model->strQuestion . "</p>";
    }

    public function outputAnswer()
    {
        return "<p>" . $this->model->strAnswer . "</p>";
    }

    public function getNewGameHTML($currentGame)
    {
        $currentQuestion = $currentGame->arrayOfRounds[1]->questionCorrect->strQuestion;
        $correctAnswer = $currentGame->arrayOfRounds[1]->questionCorrect->strAnswer;
        $wrongAnswerA = $currentGame->arrayOfRounds[1]->questionWrongA->strAnswer;
        $wrongAnswerB = $currentGame->arrayOfRounds[1]->questionWrongB->strAnswer;


        return '   
            <select id="selectQu">
                <option value="0" selected="selected">Question 1</option>
                <option value="1">Question 2</option>
                <option value="2">Question 3</option>
                <option value="3">Question 4</option>
                <option value="4">Question 5</option>
            </select>
    
            <button onclick="getQuestion()" >Get Question</button>
            <h3 id="question">question text to be updated</h3>
    
            <button onclick="getAnswer()" >Get Answer</button>
            <h3 id="answer">Answer text to be updated</h3>
            <p>###############DEBUG##########</p>
            <br>
            <br>
            <h3>' . $currentQuestion . ' </h3>
            <form action="">
                  <input type="radio" name="options" value="radioOne">'.$correctAnswer.'<br>
                  <input type="radio" name="options" value="radioTwo">'.$wrongAnswerA.'<br>
                  <input type="radio" name="options" value="radioThree">'.$wrongAnswerB.'<br>
            </form>
            <button onclick="getAnswer()" >Submit Answer</button>
            
         </body>
	    ';
    }


    //to-do fix for real layout
    public function outputNewGameHTML2()
    {


        return '   
            <select id="selectQu">
                <option value="0" selected="selected">Question 1</option>
                <option value="1">Question 2</option>
                <option value="2">Question 3</option>
                <option value="3">Question 4</option>
                <option value="4">Question 5</option>
            </select>
    
            <button onclick="getQuestion()" >Get Question</button>
            <h3 id="question">question text to be updated</h3>
    
            <button onclick="getAnswer()" >Get Answer</button>
            <h3 id="answer">Answer text to be updated</h3>
           
	    ';
    }

    public function getStartSessionHTML()
    {
        return '   
            <button onclick="startGame()" >Start Game!</button>
    
	    ';
    }
    
    

}