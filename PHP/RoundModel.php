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

    static public function setupRounds($numberOfRoundsToBePlayed, $arrayOfQuestions)
    {
        //$arrayOfFilledRounds = array(null);
        $arrayOfFilledRounds = array();
        for ($index = 0; $index < $numberOfRoundsToBePlayed; $index++) {
            $questionCorrect = $arrayOfQuestions[0];
            $questionWrongA = $arrayOfQuestions[1];
            $questionWrongB = $arrayOfQuestions[2];

            $roundToBeAdded = new RoundModel($questionCorrect, $questionWrongA, $questionWrongB);
            array_push($arrayOfFilledRounds, $roundToBeAdded);
        }

        return $arrayOfFilledRounds;


    }

}