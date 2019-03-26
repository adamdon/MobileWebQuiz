<?php


class PlayerModel
{
    public $username;
    public $password;
    public $totalScore;
    public $typeAdmin;

    // new player
    public function __construct($username, $password, $typeAdmin)
    {
        $this->username = $username;
        $this->password = $password;
        $this->typeAdmin = $typeAdmin;

        $this->totalScore = 0;
    }



    public static function updatePlayerInArray($playerToUpdate, $arrayOfPlayers)
    {
        $strEmail = $playerToUpdate->username;

        foreach ($arrayOfPlayers as $playerIndex) //test if username already taken
        {
            if($strEmail == $playerIndex->username)
            {
                $playerIndex = $playerToUpdate;
            }
        }


        return $arrayOfPlayers;
    }







}