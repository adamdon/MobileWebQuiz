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

        foreach ($arrayOfPlayers as $playerIndex) //test if username already taken
        {
            if($strEmail == $playerIndex->username)
            {
                $strInvalidReason = "user name already taken";
                $this->strRegMessage = ("Details entered for " . $strEmail . " are invalid as " . $strInvalidReason);
                return false;
            }
        }

        if(strlen($strPassword) < 4) //test if password is too small
        {
            $strInvalidReason = "password is less than 4 characters";
            $this->strRegMessage = ("Details entered for " . $strEmail . " are invalid as " . $strInvalidReason);
            return false;
        }

        return true;
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