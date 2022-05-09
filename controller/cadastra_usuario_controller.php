<?php

require "../modelos/UsuarioDb.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$repeteSenha = $_POST['repeteSenha'];
$email = $_POST['email'];
$setor = $_POST['setor'];

if($senha != $repeteSenha){
    header("Location: ../cadastrar_usuario.php?msg=SENHA");
}else{
    try{

        $usuario = new Usuario();
    
        $usuario->__set("nome",$nome);
        $usuario->__set("senha",$senha);
        $usuario->__set("email",$email);
        $usuario->__set("setor",strtoupper($setor));
    
        $action = new UsuarioDb();
    
        $action->cadastrar($usuario);
        header("Location: ../cadastrar_usuario.php?msg=SUCESSO");
    }
    catch(PDOException $e){
        header("Location: ../cadastrar_usuario.php?msg=ERRO");
    }    
}

?>