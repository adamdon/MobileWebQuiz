<?php

class RoundModel
{
    public $questionCorrect;
    public $questionWrongA;
    public $questionWrongB;

    public $correctRadioNumber;
    public $wrongRadioANumber;
    public $wrongRadioBNumber;

    static public $arrayOfUsedInt = [];
    static public $arrayOfUsedQuestions = [];
    static public $arrayOfUsedAnswers = [];


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

        for ($index = 0; $index < $numberOfRoundsToBePlayed; $index++) //loops for each round in game
        {
            $questionCorrectIndexNum = self::getRandomQuestionNumber($arrayOfQuestions);
            $questionCorrect = $arrayOfQuestions[$questionCorrectIndexNum];
            array_push(self::$arrayOfUsedAnswers, $questionCorrectIndexNum);

            $questionWrongA = $arrayOfQuestions[self::getRandomAnswerNumber($arrayOfQuestions)];
            $questionWrongB = $arrayOfQuestions[self::getRandomAnswerNumber($arrayOfQuestions)];


            $correctRadioNumber = self::GetRandomRadioPositions();
            $wrongRadioANumber = self::GetRandomRadioPositions();
            $wrongRadioBNumber = self::GetRandomRadioPositions();

            $roundToBeAdded = new RoundModel($questionCorrect, $questionWrongA, $questionWrongB, $correctRadioNumber, $wrongRadioANumber, $wrongRadioBNumber);
            array_push($arrayOfFilledRounds, $roundToBeAdded);


            self::$arrayOfUsedInt = []; // clear radio numbers for next round
            self::$arrayOfUsedAnswers = []; // clear Answers used for  next round
            array_push(self::$arrayOfUsedAnswers, $questionCorrectIndexNum); // Add this rounds question back in
        }

        self::$arrayOfUsedQuestions = []; //clear used questions for next game
        self::$arrayOfUsedAnswers = []; // clear Answers used for  next game

        return $arrayOfFilledRounds;
    }


    static private function getRandomQuestionNumber($arrayOfQuestions)
    {
        $intNumberOfQuestions = (sizeof($arrayOfQuestions) - 1);
        $intQuestionNumber = mt_rand(0, $intNumberOfQuestions);

        while(in_array($intQuestionNumber, self::$arrayOfUsedQuestions))
        {
            $intQuestionNumber = mt_rand(0, $intNumberOfQuestions);
        }
        array_push(self::$arrayOfUsedQuestions, $intQuestionNumber);

        return $intQuestionNumber;
    }


    static private function getRandomAnswerNumber($arrayOfQuestions)
    {
        $intNumberOfQuestion = (sizeof($arrayOfQuestions) - 1);
        $intQuestionNumber = mt_rand(0, $intNumberOfQuestion);

        while(in_array($intQuestionNumber, self::$arrayOfUsedAnswers))
        {
            $intQuestionNumber = mt_rand(0, $intNumberOfQuestion);
        }
        array_push(self::$arrayOfUsedAnswers, $intQuestionNumber);

        return $intQuestionNumber;
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