<?php

class LoginHelper
{
    public $playerLoggedIn;
    public $timeLoggedIn;
    public $isPlayerLoggedIn = false;

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

                return $this->isPlayerLoggedIn;
            }
//            else
//            {
//                $isPlayerLoggedIn = false;
//            }
        }

        $isPlayerLoggedIn = false;
        return $isPlayerLoggedIn;

    }


    public function registerNewDetailsToPlayers($arrayOfPlayers, $strEmail, $strPassword)
    {
        $NewPlayer = new PlayerModel($strEmail, $strPassword, false);
        array_push($arrayOfPlayers, $NewPlayer);

        return $arrayOfPlayers;
    }

    public function logOut()
    {
        $this->isPlayerLoggedIn = false;
        $this->playerLoggedIn = null;
        $this->timeLoggedIn = null;

    }








}