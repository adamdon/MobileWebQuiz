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
            </br>
            </br>
            </br>
            </br>   
            <h3>' . $currentQuestion . ' </h3>
            <form action="">
                  <input type="radio" name="options" value="1">'.$correctAnswer.'<br>
                  <input type="radio" name="options" value="2">'.$wrongAnswerA.'<br>
                  <input type="radio" name="options" value="3">'.$wrongAnswerB.'<br>
            </form>
            <button onclick="submitAnswer()" >Submit Answer</button>
            </br>
            </br>
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

         return ($this->navigationBarHTML() . $stringOfHTML);
        //return phpinfo();
    }


    public function getStartSessionHTML()
    {
        $stringOfHTML = '
            </br>  
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

        return ($this->navigationBarHTML() . $stringOfHTML);
    }





    //Private functions here
    //
    private function navigationBarHTML()
    {
        $stringOfHTML = ' 
            <div class="header-line">
            </div>
            <div class="navigation-main">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="navlog">
                        <a class="navbar-brand" href="Home.html"> <img src="htmls/images/fdm-logo.gif" class="nav-log" alt="FDM Logo"></a>
                    </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="htmls/About.html">About</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
                
            </div>
         
        ';

        return $stringOfHTML;
    }
    
    

}