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

    public function outputNewGameHTML()
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
         </body>
	    ';
    }
    
    

}