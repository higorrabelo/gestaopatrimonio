<?php

require("Db.php");
require("Usuario.php");

class UsuarioDb{

    private $conn;

    public function login($usuario){
        $conn = Db::getConnection();
        try{
            $sql = "select * from usuario where nome = ? && senha= ? ";
            $st = $conn->prepare($sql);
            $st->bindValue(1,$usuario->__get("nome"));
            $st->bindValue(2,$usuario->__get("senha"));
            $st->execute();
            $rs = $st->fetch(PDO::FETCH_OBJ);
            return $rs;
        }
        catch(PDOException $e){
            echo "Erro: ".$e->getMessage();
        }
    }
    public function cadastrar($usuario){
        $conn = Db::getConnection();
        $sql = "insert into usuario(nome,senha,email,setor) values ( nome = ? , senha = md5(?) , email = ? , setor = ? )";
        try{
            $st = $conn->prepare($sql);
            $st->bindValue(1,$usuario->__get("nome"));
            $st->bindValue(2,$usuario->__get("senha"));
            $st->bindValue(3,$usuario->__get("email"));
            $st->bindValue(4,$usuario->__get("setor"));
            $st->execute();
            echo $conn->lastInsertId();
            echo "Inserido com sucesso";
            echo "<pre>";
            print_r($usuario);
            echo "</pre>";
        }
        catch(PDOException $e){
            echo "Erro: ".$e->getMessage();
        }
    }
}

/* Login de usuário */

/* 
$usuario = new Usuario();
$usuario->__set("nome","Higor");
$usuario->__set("senha",md5("Higor20"));
$usuario->__set("email","higor.rabelo@gmail.com");
$usuario->__set("setor","SUPORTE");

$conexao = new UsuarioDb();

if($conexao->login($usuario)){
    echo "Conexão Realizada";
}else{
    echo "Falha no login";
}

 */

/*  Inserir usuario */

$usuario = new Usuario();
$usuario->__set("nome","Allan");
$usuario->__set("senha",md5("Allan"));
$usuario->__set("email","allan@gmail.com");
$usuario->__set("setor","SUPORTE");


$conexao = new UsuarioDb();

$conexao->cadastrar($usuario);

?>