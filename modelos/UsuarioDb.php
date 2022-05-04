<?php

require("Db.php");
require("Usuario.php");

class UsuarioDb{

    private $conn;
    private Usuario $usuario;

    public function __construct($conn,$usuario){
        $this->conn = DB::getConnection();
        $this->usuario = $usuario;
    }

}

?>