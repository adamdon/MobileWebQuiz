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
                $isPlayerLoggedIn = true;
                $this->playerLoggedIn = $playerIndex;
                $this->timeLoggedIn = date('Y/m/d H:i:s');

                return $isPlayerLoggedIn;
            }
//            else
//            {
//                $isPlayerLoggedIn = false;
//            }
        }

        $isPlayerLoggedIn = false;
        return $isPlayerLoggedIn;

    }






}