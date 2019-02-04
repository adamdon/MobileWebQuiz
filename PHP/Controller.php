<?php

class Controller
{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function GetAnswer()
    {
        return $this->model->strAnswer;
    }

    public function GetQuestion()
    {
        return $this->model->strQuestion;
    }


}