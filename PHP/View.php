<?php

class View
{
    private $currentGame;

    public function __construct()
    {
        //$this->model = $model;
    }




    //
    //Login and user accounts html
    //
    public function getLoginScreenHTML($loginHelperState)
    {
        $strMessage = $loginHelperState->strMessage;
        $stringOfHTML = '
            
                <form class="login" id="table1" action="index.html" method="post">
                    <h1>Login</h1>
                    <hr class="light-100">
                    <div class="d-flex justify-content-center form-group ">
                        <input type="text" name="" id="email" placeholder="Username">
                    </div>
                    <div class="d-flex justify-content-center form-group col">
                        <input type="password" name="" id="pass" placeholder="Password">
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="button" onclick="logIn()" name="" value="Login" >
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="button" onclick="loadRegisterPage()" name="" value="Register" >
                    </div>
                    <div class="card-footer">>
                        <div class="d-flex justify-content-center">
                            <a href="#">' . $strMessage . '</a>
                        </div>
                    </div>
                </form>
    
	    ';

        return ($this->navigationBarHTML() . $this->carouselTopHTML() . $stringOfHTML . $this->carouselBottomHTML() . $this->footerHTML());
    }


    public function getRegisterScreenHTML($loginHelper)
    {
        $strRegMessage = $loginHelper->strRegMessage;

        $stringOfHTML = '
            </br>
            <label for="regMessage"><b>' . $strRegMessage . ' </b></label>
            </br>
            </br>
            </br>
            <label for="email"><b>Set Username</b></label>
            <input type="text" placeholder="Enter a username" id="email" required>
            </br>
            </br>
            <label for="pass1"><b>Password</b></label>
            <input type="password" placeholder="Enter password" id="pass1" required>
            </br>
            <label for="pass2"><b>Password</b></label>
            <input type="password" placeholder="Confirm Password" id="pass2" required>
            </br>
            </br>
            <button onclick="registerNewDetails()">Register</button>
    
	    ';

        return ($this->navigationBarHTML() . $this->carouselTopHTML() . $stringOfHTML . $this->carouselBottomHTML() . $this->footerHTML());
    }


    public function getTopScoresScreenHTML($loginHelper, $arrayOfPlayers)
    {
        //$strRegMessage = $loginHelper->strRegMessage;

        $stringOfHTML = '
                <div class="container login top-table" id="table1">
                    <h1>Top Scores</h1>
                    <hr class="light-60 margin70">
                    <table class="top-table table table-responsive-sm">
                        <thead>
                        <tr>
                            <th scope="col" class="left-round">#</th>
                            <th scope="col">Username</th>
                            <th scope="col" class="right-round">Total Score:</th>
                        </tr>
                        </thead>
                        <tbody>

	    ';

        $intCounter = 1;

        foreach ($arrayOfPlayers as $playerIndex) // traverse of array
        {
            $currentName = $playerIndex->username;
            $currentTotalScore = $playerIndex->totalScore;

            $stringOfHTML .= '
                        <tr>
                            <th scope="row">'. $intCounter .'</th>
                            <td>'. $currentName .'</td>
                            <td>'. $currentTotalScore .'</td>
                        </tr>

            ';
            $intCounter++;
        }

        $stringOfHTML .= '
                        </tbody>
                    </table>
                </div>
        
        ';


        return ($this->navigationBarHTML() . $this->carouselTopHTML() . $stringOfHTML . $this->carouselBottomHTML() . $this->footerHTML());
    }





    //
    //Game play HTML
    //
    public function getGameSelectHTML($loginHelper)
    {
        $currentUserName = $loginHelper->playerLoggedIn->username;

        $stringOfHTML = '
            </br>
            <h3>Welcome back '. $currentUserName .'</h3>
            </br>
            </br>   
            <select id="selectRounds">
                <option value="1" selected="selected">Rounds to play: 1</option>
                <option value="2">Rounds to play: 2</option>
                <option value="3">Rounds to play: 3</option>
                <option value="4">Rounds to play: 4</option>
                <option value="5">Rounds to play: 5</option>
            </select> 
            </br>
            </br>   
            <select id="selectCategory">
                <option value="Capital Cities" selected="selected">Capital Cities</option>
                <option value="Movie Quotes">Movie Quotes</option>
                <option value="null">Null</option>
                <option value="null">Null</option>
                <option value="null">Null</option>
            </select> 
            </br>
            </br>
            <button onclick="startGame()" >Start Game</button>
    
	    ';

        return ($this->navigationBarHTML() . $this->carouselTopHTML() . $stringOfHTML . $this->carouselBottomHTML() . $this->footerHTML());

    }


    public function getQuestionScreenHTML($currentGame)
    {
        $this->currentGame = $currentGame;

        $textOfStatus = $this->currentGame->textOfStatus;
        $textOfCurrentRound = (int)$this->currentGame->numberOfCurrentRound;
        $currentQuestion = $this->currentGame->arrayOfRounds[$textOfCurrentRound]->questionCorrect->strQuestion;


        $RadioTextOne = $this->getAnswerTextFromRadioNumber(1, $this->currentGame);
        $RadioTextTwo = $this->getAnswerTextFromRadioNumber(2, $this->currentGame);
        $RadioTextThree = $this->getAnswerTextFromRadioNumber(3, $this->currentGame);

        $stringOfHTML = '
            <h3>' . $currentQuestion . ' </h3>
            <form action="">
                  <input type="radio" name="options" value="1">'.$RadioTextOne.'<br>
                  <input type="radio" name="options" value="2">'.$RadioTextTwo.'<br>
                  <input type="radio" name="options" value="3">'.$RadioTextThree.'<br>
            </form>
            <button onclick="submitAnswer()" >Submit Answer</button>
            </br>
            </br>
            <h3 id="status">Status: ' . $textOfStatus .' </h3>
            
            '. $this->gameStatsHTML() .'
            
            <button onclick="nextRound()" >Next Round</button>

	    ';

        return ($this->navigationBarHTML() . $this->carouselTopHTML() . $stringOfHTML . $this->carouselBottomHTML() . $this->footerHTML());
        //return phpinfo();
    }


    public function getGameFinishedHTML($currentGame)
    {
        $this->currentGame = $currentGame;

        $stringOfHTML = '
            </br>
            <h3>Game Finished!</h3>
            '. $this->gameStatsHTML() .'     
         ';

        return ($this->navigationBarHTML() . $this->carouselTopHTML() . $stringOfHTML . $this->carouselBottomHTML() . $this->footerHTML());
    }

    private function gameStatsHTML()
    {
        $textOfPlayerName = $this->currentGame->player->username;
        $textOfTotalRounds = $this->currentGame->numberOfRoundsToBePlayed;
        $textOfCurrentRound = (int)$this->currentGame->numberOfCurrentRound;
        $textOfScore = $this->currentGame->numberOfScore;


        $stringOfHTML = '
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
        
        ';

        return $stringOfHTML;
    }







    //
    //Page templates HTML
    //
    private function carouselTopHTML()
    {
        $stringOfHTML = ' 
            <div class="container-fluid galax">
            <div class="d-flex justify-content-center vertical-center">
            <div class="card" id="bord0">
        ';

        return $stringOfHTML;
    }


    private function carouselBottomHTML()
    {
        $stringOfHTML = ' 
                
            </div>
            </div>
            </div>

        ';

        return $stringOfHTML;
    }


    private function navigationBarHTML()
    {
        $stringOfHTML = ' 
            <nav class="navbar navbar-expand-lg navbar-dark stroke" id="nav">
                <div id="contid" class="container-fluid">
                    <a class="navbar-brand" onclick="startSession()"> <img src="../images/fdm-logo.gif" class="nav-log" alt="FDM Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" onclick="startSession()">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="logOut()">Log Out</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="loadTopScores()">Top Scores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="loadRegisterPage()">Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="loadLogin()">Sign In</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
         
        ';

        return $stringOfHTML;
    }


    private function footerHTML()
    {
        $stringOfHTML = ' 
            <div class="container-fluid padding">
                <div class="row welcome text-center">
                    <div class="col-12">
                        <h1 class="display-4">Test your limits.</h1>
                    </div>
                    <hr>
                    <div class="col-12">
                        <p class="lead">We are bringing you a variety of quizes to test your limits. You can choose from our created categories to suit your needs. Have fun while you learn!</p>
                    </div>
                </div>
            </div>
    
            <div class="container-fluid padding">
                <div class="row text-center padding">
                    <div class="col-12">
                        <h2>Follow Us</h2>
                    </div>
                    <div class="col-12 social padding">
                        <a href="https://www.facebook.com/FDMGroup/"><i class="fab fa-facebook"></i></a>
                        <a href="hhttps://twitter.com/FDMGroup"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/fdm-group"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/fdm_group/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/user/FDMGroupVideos"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
    
            <footer>
                <div class="row text-center">
                    <div class="col-md-12">
                        <h5>For more information about FDM Group, please click the button below:</h5>
                        <button type="button" class="btn btn-outline-light btn-lg">><a href="https://www.fdmgroup.com/">FDM Group Main Page</a></button>
                    </div>
                    <div class="col-12">
                        <hr class="light-100">
                        <h5>&copy; FDM Group 2018</h5>
                    </div>
                </div>
            </footer>
         
        ';
        return " ";
        //return $stringOfHTML;
    }








    //
    //Private functions
    //might move this to a static method in round
    private function getAnswerTextFromRadioNumber($requestedRadioNumber, $currentGame)
    {
        if($currentGame->arrayOfRounds[$currentGame->numberOfCurrentRound]->correctRadioNumber == $requestedRadioNumber)
        {
            return $currentGame->arrayOfRounds[$currentGame->numberOfCurrentRound]->questionCorrect->strAnswer;
        }
        elseif($currentGame->arrayOfRounds[$currentGame->numberOfCurrentRound]->wrongRadioANumber == $requestedRadioNumber)
        {
            return $currentGame->arrayOfRounds[$currentGame->numberOfCurrentRound]->questionWrongA->strAnswer;
        }
        elseif($currentGame->arrayOfRounds[$currentGame->numberOfCurrentRound]->wrongRadioBNumber == $requestedRadioNumber)
        {
            return $currentGame->arrayOfRounds[$currentGame->numberOfCurrentRound]->questionWrongB->strAnswer;
        }
    }

}