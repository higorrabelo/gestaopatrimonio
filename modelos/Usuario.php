<?php
class Usuario{

    private $nome;
    private $senha;
    private $email;
    private $setor;

   
    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }
    public function __get($atributo){
        return $this->$atributo;
    }
}

/* 
$usuario = new Usuario();

$usuario->__set("nome","Higor");
$usuario->__set("senha",md5("Higor20"));
$usuario->__set("email","higor.rabelo@gmail.com");
$usuario->__set("setor","SUPORTE");

echo "<pre>";
print_r($usuario);
echo "</pre>";

 */
?>