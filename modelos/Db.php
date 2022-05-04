<?php

class Db{

    private $conn;

    public static function getConnection(){
        $conn = new PDO("mysql:host=localhost;dbname=gespat","root","Higor120783");
        return $conn;
    }
}

?>