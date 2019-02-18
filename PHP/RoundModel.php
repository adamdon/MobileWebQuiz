<?php

class RoundModel
{
    //to be changed with random logic
    public $questionCorrect;
    public $questionWrongA;
    public $questionWrongB;

    public $correctRadioNumber;
    public $wrongRadioANumber;
    public $wrongRadioBNumber;

    static public $arrayOfUsedInt = [];



    public function __construct($questionCorrect, $questionWrongA, $questionWrongB, $correctRadioNumber, $wrongRadioANumber, $wrongRadioBNumber)
    {
        $this->questionCorrect = $questionCorrect;
        $this->questionWrongA = $questionWrongA;
        $this->questionWrongB = $questionWrongB;

        $this->correctRadioNumber = $correctRadioNumber;
        $this->wrongRadioANumber = $wrongRadioANumber;
        $this->wrongRadioBNumber = $wrongRadioBNumber;
    }

    static public function setupRounds($numberOfRoundsToBePlayed, $arrayOfQuestions)
    {
        $arrayOfFilledRounds = array();
        for ($index = 0; $index < $numberOfRoundsToBePlayed; $index++)
        {


            $questionCorrect = $arrayOfQuestions[0];
            $questionWrongA = $arrayOfQuestions[1];
            $questionWrongB = $arrayOfQuestions[2];

            $correctRadioNumber = self::GetRandomRadioPositions();
            $wrongRadioANumber = self::GetRandomRadioPositions();
            $wrongRadioBNumber = self::GetRandomRadioPositions();

            $roundToBeAdded = new RoundModel($questionCorrect, $questionWrongA, $questionWrongB, $correctRadioNumber, $wrongRadioANumber, $wrongRadioBNumber);
            array_push($arrayOfFilledRounds, $roundToBeAdded);
        }

        return $arrayOfFilledRounds;

    }
    static private function GetRandomRadioPositions()
    {
        $intRadioPositions = mt_rand(1, 3);

        while(in_array($intRadioPositions, self::$arrayOfUsedInt))
        {
            $intRadioPositions = mt_rand(1, 3);
        }

        array_push(self::$arrayOfUsedInt, $intRadioPositions);
        return $intRadioPositions;
    }




//    static private function GetRandomRadioPositions() //don't think this works
//    {
//        $intRadioPositions = mt_rand(1, 4);
//
//        foreach(self::$arrayOfUsedInr as $index)
//        {
//            if($intRadioPositions != $index)
//            {
//                array_push(self::$arrayOfUsedIn, $intRadioPositions);
//                return $intRadioPositions;
//            }
//            $intRadioPositions  = mt_rand(1, 4);
//        }
//
//    }

}