<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul']='Home';
        $data['boba'] = $this->model('User_model')->getUser();
        //mencari file
        $this->view('templates/header',$data);
        $this->view('home/index' , $data);
        $this->view('templates/footer', $data);
    }
}