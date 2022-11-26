<?php

class App
{
    //untuk menampilkan nilai url setelah datanya diambil di method parseURL
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
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