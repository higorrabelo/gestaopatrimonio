<?php

require('../modelos/UsuarioDb.php');



$msg = isset($_GET['msg']) ? $_GET['msg'] : $msg;

if($msg == "logar"){
    $nome = $_POST['login'];
    $senha = $_POST['senha'];
    $usuario = new Usuario();
    $usuario->__set("nome",$nome);
    $usuario->__set("senha",$senha);
    $action = new UsuarioDb();
    if($action->login($usuario)){
        header("Location: ../home.php");
        session_start();
        $_SESSION['status']="OK";
        $_SESSION['nome']=$nome;
    }else{
        header("Location: ../index.php?login=ERRO");
        }
}
if($msg=='sair'){
    session_start();
    session_destroy();
    header("Location: ../index.php");
}

?>