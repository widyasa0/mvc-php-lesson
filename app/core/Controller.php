<?php

class Controller{
    //memanggil view
    public function view($view, $data=[])
    {
        require_once '../app/views/' . $view . '.php';
    }

    //memanggil model
    public function model($model)
    {
        require_once '../app/models/' . $model .'.php';
        return new $model;
    }
}
