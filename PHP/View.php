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

    public function getQuestionScreenHTML($currentGame)
    {
        $textOfStatus = $currentGame->textOfStatus;
        $textOfPlayerName = $currentGame->player->username;
        $textOfTotalRounds = $currentGame->numberOfRoundsToBePlayed;
        $textOfCurrentRound = (int)$currentGame->numberOfCurrentRound;
        $textOfScore = $currentGame->numberOfScore;

        $currentQuestion = $currentGame->arrayOfRounds[$textOfCurrentRound]->questionCorrect->strQuestion;
        $correctAnswer = $currentGame->arrayOfRounds[$textOfCurrentRound]->questionCorrect->strAnswer;
        $wrongAnswerA = $currentGame->arrayOfRounds[$textOfCurrentRound]->questionWrongA->strAnswer;
        $wrongAnswerB = $currentGame->arrayOfRounds[$textOfCurrentRound]->questionWrongB->strAnswer;

        $stringOfHTML = '   
            <h3>' . $currentQuestion . ' </h3>
            <form action="">
                  <input type="radio" name="options" value="1">'.$correctAnswer.'<br>
                  <input type="radio" name="options" value="2">'.$wrongAnswerA.'<br>
                  <input type="radio" name="options" value="3">'.$wrongAnswerB.'<br>
            </form>
            <button onclick="submitAnswer()" >Submit Answer</button>
            <h3 id="status">Status: ' . $textOfStatus .' </h3>
            
            <table>
                <tr>
                    <td>Player Name:</td>
                    <td>'. $textOfPlayerName .'</td>
                </tr>
                <tr>
                    <td>Total Rounds:</td>
                    <td>'. $textOfTotalRounds .'</td>
                </tr>
                <tr>
                    <td>Current Round:</td>
                    <td>'. ($textOfCurrentRound + 1) .'</td>
                </tr>
                <tr>
                    <td>Score:</td>
                    <td>'. $textOfScore .'</td>
                </tr>
            </table>
            
            <button onclick="nextRound()" >Next Round</button>

	    ';

         return $stringOfHTML;
        //return phpinfo();
    }


    public function getStartSessionHTML()
    {
        return '
              
            <select id="selectRounds">
                <option value="1" selected="selected">Rounds to play: 1</option>
                <option value="2">Rounds to play: 2</option>
                <option value="3">Rounds to play: 3</option>
                <option value="4">Rounds to play: 4</option>
                <option value="5">Rounds to play: 5</option>
            </select> 
            </br>
            <button onclick="startGame()" >Start Game</button>
    
	    ';
    }
    
    

}