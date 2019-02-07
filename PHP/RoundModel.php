<?php

class RoundModel
{
    //to be changed with random logic
    public $questionCorrect;
    public $questionWrongA;
    public $questionWrongB;

    public function __construct($questionCorrect, $questionWrongA, $questionWrongB)
    {
        $this->questionCorrect = $questionCorrect;
        $this->questionWrongA = $questionWrongA;
        $this->questionWrongB = $questionWrongB;
    }

}