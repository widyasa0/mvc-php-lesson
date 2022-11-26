<?php

class App
{
    //membuat nilai default
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    //untuk menampilkan nilai url setelah datanya diambil di method parseURL
    public function __construct()
    {
        $url = $this->parseURL();


        //mengelola controller

        //mengambil controller
        //apabila controller yang diambil itu ada, maka controller itulah yang akan ditampilkan
        //kalau tidak ada, controller yang ditampilkan adalah controller default
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        //memanggil controller
       require_once '../app/controllers/' . $this->controller  . '.php';
        //class instansiasi untuk dapat memanggil method
        $this->controller = new $this->controller;


        //mengelola method

        //mengecek method
        if (isset($url[1])){
            //kalau method di controller itu tersedia, maka pakai method itu
            //kalau tidak, maka menggunakan method default
            if (method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }


        //mengelola params

        //mengecek params
        if (!empty($url)){
            //mengambil parameter
            $this->params = array_values($url);
        }

        //run controller & method, kirim params jika ada
        call_user_func_array([$this->controller, $this->method] , $this->params );
    }

    //untuk ngambil data dari url
    //kalau misalnya ada data di urlnya itu, maka datanya akan diambil menggunakan method parseURL
    public function parseURL()
    {
        if (isset($_GET['url'])){

            //rtrim untuk menghapus slash terakhir di url
            $url =rtrim( $_GET['url'],'/');
            //membersihkan url dari karakter aneh
            $url =filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }

    }
}