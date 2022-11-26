<?php

class Controller{
    //memanggil view
    public function view($view, $data=[])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/model' . $model .'.php';
    }
}
