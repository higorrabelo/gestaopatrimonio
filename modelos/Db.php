<?php

class Db{

    private $conn;

    public static function getConnection(){
        $conn = new PDO("mysql:host=localhost;dbname=gespat","root","Higor120783");
        return $conn;
    }
}

$conn = Db::getConnection();

$sql = "select * from usuario";

$st = $conn->query($sql);

$rs = $st->fetchAll(PDO::FETCH_OBJ);

print_r($rs);

?>