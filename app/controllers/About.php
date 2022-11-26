<?php

class About extends Controller
{
    public function index($nama = 'nana', $pacar = 'dada')
    {
        //mendefinisikan data data dari url, lalu data tersebut akan tampil di view
        $data['nama']=$nama;
        $data['pacar']=$pacar;
        $data['judul']='About';

        //manggil view
        $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}