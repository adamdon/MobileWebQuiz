<?php

class LoginHelper
{
    public $playerLoggedIn;
    public $timeLoggedIn;
    public $isPlayerLoggedIn = false;
    public $strMessage = "Welcome!";
    public $strRegMessage = "";

    public function __construct()    //$playerLoggedIn)
    {
//        $this->playerLoggedIn = $playerLoggedIn;
//        $this->timeLoggedIn = date('Y/m/d H:i:s');
    }

    public function isLoginValid($arrayOfPlayers, $strEmail, $strPassword)
    {
        foreach ($arrayOfPlayers as $playerIndex)
        {
            if( ($strEmail == $playerIndex->username) && ($strPassword == $playerIndex->password) )
            {
                $this->isPlayerLoggedIn = true;
                $this->playerLoggedIn = $playerIndex;
                $this->timeLoggedIn = date('Y/m/d H:i:s');

                $this->strMessage = ("Player " . $playerIndex->username . " logged in since " . $this->timeLoggedIn);

                return $this->isPlayerLoggedIn;
            }
//            else
//            {
//                $isPlayerLoggedIn = false;
//            }
        }

        $this->strMessage = ("Invalid Details for " . $strEmail);

        $isPlayerLoggedIn = false;
        return $isPlayerLoggedIn;

    }


    public function isRegistrationValid($arrayOfPlayers, $strEmail, $strPassword)
    {
        $isDetailsValid = true;
        //TODO add validation tests
        if($isDetailsValid = true)
        {
            return true;
        }
        else
        {
            $this->strRegMessage = ("Details entered for " . $strEmail . " are invalid");
            return false;
        }

    }


    public function registerNewDetailsToPlayers($arrayOfPlayers, $strEmail, $strPassword)
    {
        $NewPlayer = new PlayerModel($strEmail, $strPassword, false);
        array_push($arrayOfPlayers, $NewPlayer);

        $this->strMessage = ($strEmail . " successfully registered");

        return $arrayOfPlayers;
    }




    public function logOut()
    {
        $this->isPlayerLoggedIn = false;
        $this->playerLoggedIn = null;
        $this->timeLoggedIn = null;

        $this->strMessage = ( "Logged out at " . (date('Y/m/d H:i:s')) );
    }








}