<?php

require "Patrimonio.php";
require "Db.php";

class PatrimonioDb{

    private $conn;

    public function cadastraPatrimonio($pat){
        $conn = Db::getConnection();
        $sql="insert into patrimonio(nome,tipo,setor,fabricante,fornecedor,valor,depreciacao,imagem,quantidade,localizacao,aquisicao,id_usuario) ";
        $sql.=" values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        try{
            $st = $conn->prepare($sql);
            $st->bindValue(1,$pat->__get("nome"));
            $st->bindValue(2,$pat->__get("tipo"));
            $st->bindValue(3,$pat->__get("setor"));
            $st->bindValue(4,$pat->__get("fabricante"));
            $st->bindValue(5,$pat->__get("fornecedor"));
            $st->bindValue(6,$pat->__get("valor"));
            $st->bindValue(7,$pat->__get("depreciacao"));
            $st->bindValue(8,$pat->__get("imagem"));
            $st->bindValue(9,$pat->__get("quantidade"));
            $st->bindValue(10,$pat->__get("localizacao"));
            $st->bindValue(11,$pat->__get("aquisicao"));
            $st->bindValue(12,$pat->__get("id_usuario"));
            $st->execute();

            $id = $conn->lastInsertId();
            $caminho = "../imagens/fontes/".$id."/";

            if(!is_dir($caminho)){
                mkdir($caminho,777,true);
            }
            
            $conn->query("update patrimonio set imagem = '$caminho' where id = '$id' ");

        }
        catch(PDOException $e){
            echo "Erro na inserção de Patrimonio".$e->getMessage();
        }
    }

}
/* 
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
$aquisicao="2022-05-22";
$id_usuario=1;
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

$action= new PatrimonioDb();

$action->cadastraPatrimonio($pat); */


?>