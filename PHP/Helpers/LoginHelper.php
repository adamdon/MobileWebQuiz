<?php

class LoginHelper
{
    public $playerLoggedIn;
    private $timeLoggedIn;

    public function __construct($playerLoggedIn)
    {
        $this->playerLoggedIn = $playerLoggedIn;
        $this->timeLoggedIn = date('Y/m/d H:i:s');
    }




}