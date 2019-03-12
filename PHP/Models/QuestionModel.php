<?php


class QuestionModel
{
    public $strQuestion;
    public $strAnswer;



    public function __construct($strQuestion, $strAnswer)
    {
        $this->strQuestion = $strQuestion;
        $this->strAnswer = $strAnswer;
    }

    public function getStrQuestion()
    {
        return $this->strQuestion;
    }

    public function setStrQuestion($strQuestion)
    {
        $this->strQuestion = $strQuestion;
    }

    public function getStrAnswer()
    {
        return $this->strAnswer;
    }

    public function setStrAnswer($strAnswer)
    {
        $this->strAnswer = $strAnswer;
    }


}