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
    $result = $action->login($usuario);
    
    if($result){
        session_start();
        $_SESSION['id']=$result->id;
        $_SESSION['status']="OK";
        $_SESSION['nome']=$nome;
        header("Location: ../home.php");
    }else{
        header("Location: ../index.php?msg=ERRO");
        }
}
if($msg=='sair'){
    session_start();
    session_destroy();
    header("Location: ../index.php");
}

?>