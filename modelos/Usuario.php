<?php


class Usuario{

    private $nome;
    private $senha;
    private $email;
    private $departamento;

    public function __contruct($nome,$senha,$email,$departamento){
        $this->nome=$nome;
        $this->senha=$senha;
        $this->email=$email;
        $this->departamento=$departamento;
    }

    public function __get($valor){
        return $this->$valor;
    }


}


?>