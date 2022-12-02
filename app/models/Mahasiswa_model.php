<?php

class Mahasiswa_model
{
   private $dbh;
   private $stmt;


    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=wpu_mvc';
        //melakukan try pada dbh apakah itu berhasil atau gagal, kalau berhasil lanjut dan kalau gagal maka
        //message error akan dimunculkan
        try {
            $this->dbh = new PDO($dsn,'root','');
        } catch (PDOException $e){
            die($e->getMessage());
        }
   }

    public function getMahasiswa()
    {
        $query = 'SELECT * FROM mahasiswa';
        $this->stmt = $this->dbh->prepare($query);
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
   }
}