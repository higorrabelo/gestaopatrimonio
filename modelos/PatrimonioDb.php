<?php

require "Patrimonio.php";
require "Db.php";

class PatrimonioDb{


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
            $st->bindValue(8,"valor");
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
            return $caminho;
        }
        catch(PDOException $e){
            echo "Erro na inserção de Patrimonio".$e->getMessage();
        }
    }
    public function deletarPatrimonio($id){

    }
    public function editarPatrimonio($id,$pat){
        $conn = Db::getConnection();
        $sql = "update patrimonio set nome = ? , tipo = ? , setor = ? , fabricante = ? , fornecedor = ? , valor = ? , depreciacao = ? , quantidade = ? , localizacao = ? , atualizacao = current_timestamp , id_usuario = ? where id = ? ";
        try{
            $st = $conn->prepare($sql);
            $st->bindValue(1,$pat->__get("nome"));
            $st->bindValue(2,$pat->__get("tipo"));
            $st->bindValue(3,$pat->__get("setor"));
            $st->bindValue(4,$pat->__get("fabricante"));
            $st->bindValue(5,$pat->__get("fornecedor"));
            $st->bindValue(6,$pat->__get("valor"));
            $st->bindValue(7,$pat->__get("depreciacao"));
            $st->bindValue(8,$pat->__get("quantidade"));
            $st->bindValue(9,$pat->__get("localizacao"));
            $st->bindValue(10,$pat->__get("id_usuario"));
            $st->bindValue(11,$id);
            $st->execute();
            //echo "Atualizado com sucesso";
        }
        catch(PDOException $e){
            echo "Erro na Atualização de Patrimonio".$e->getMessage();
        }
    }
    public function listarPatrimonio(){
        $conn = Db::getConnection();
        $sql = "select * from patrimonio";
        try{
            $st = $conn->query($sql);
            $rs = $st->fetchAll(PDO::FETCH_OBJ);
            return $rs;
        }
        catch(PDOException $e){
            echo "Erro em recuperar os dados".$e->getMessage();
        }

    }
    public function localizarPatrimonio($id){
        $conn = Db::getConnection();
        $sql = "select * from patrimonio where id = ?";
        try{
            $st = $conn->prepare($sql);
            $st->bindValue(1,$id);
            $st->execute();
            $busca = $st->fetch(PDO::FETCH_OBJ);
            return $busca;
        }
        catch(PDOException $e){
            echo "Erro em recuperar o Item: ".$e->getMessage();
        }
    }

}

/* 
$busca = new PatrimonioDb();

echo "<pre>";
print_r($busca->listarPatrimonio());
echo "</pre>";

 */

/* $busca = new PatrimonioDb();

echo "<pre>";
print_r($busca->localizarPatrimonio(13));
echo "</pre>";
 */
?>