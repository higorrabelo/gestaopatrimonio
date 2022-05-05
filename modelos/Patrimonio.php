<?php
class Patrimonio{
    private $nome;
    private $tipo;
    private $setor;
    private $fabricante;
    private $fornecedor;
    private $valor;
    private $depreciacao;
    private $imagem;
    private $quantidade;
    private $localizacao;
    private $aquisicao;
    private $id_usuario;
    public function __set($atributo,$valor){
        $this->$atributo=$valor;
    }
    public function __get($atributo){
        return $this->$atributo;
    }   
}

$pat = new Patrimonio();

$nome="Notebook";
$tipo="ELETRONICO";
$setor="SUPORTE";
$fabricante="LENOVO";
$fornecedor="SOL";
$valor=3.500;
$depreciacao=10;
$imagem="../Imagens/base/1/";
$quantidade="30";
$localizacao="BELEM";
$aquisicao="12/07/2022";
$id_usuario="Higor";



$pat->__set("nome",$nome);
$pat->__set("tipo",$tipo);
$pat->__set("setor",$setor);
$pat->__set("fabricante",$fabricante);
$pat->__set("fornecedor",$fornecedor);
$pat->__set("valor",$valor);
$pat->__set("depreciacao",$depreciacao);
$pat->__set("imagem",$imagem);
$pat->__set("quantidade",$quantidade);
$pat->__set("localizacao",$localizacao);
$pat->__set("aquisicao",$aquisicao);
$pat->__set("id_usuario",$id_usuario);

echo "<pre>";
print_r($pat);
echo "</pre>";

?>