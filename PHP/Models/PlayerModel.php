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







}