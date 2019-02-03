<?php

class View
{
    private $model;
    private $controller;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function outputQuestion()
    {
        return $this->model->strQuestion;
        //return "<p>" . $this->model->strQuestion . "</p>";
    }

    public function outputAnswer()
    {
        return "<p>" . $this->model->strAnswer . "</p>";
    }

}