<?php


class PlayerModel
{
    public $username;
    public $password;
    public $totalScore;

    // new player
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->totalScore = 0;
    }







}