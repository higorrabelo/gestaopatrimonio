<?
require "../modelos/PatrimonioDb.php";

$nome = strtoupper($_POST['nome']);
$fabricante = strtoupper($_POST['fabricante']);
$fornecedor = strtoupper($_POST['fornecedor']);
$quantidade = strtoupper($_POST['quantidade']);
$localizacao = strtoupper($_POST['localizacao']);
$arquivo = $_FILES['arquivo'];
$tipo = strtoupper($_POST['tipo']);
$setor = strtoupper($_POST['setor']);
$valor = $_POST['valor'];
$depreciacao = $_POST['depreciacao'];
$aquisicao = $_POST['data'];
$id_usuario=1;

try{
    $pat = new Patrimonio();

    $pat->__set("nome",$nome);
    $pat->__set("tipo",$tipo);
    $pat->__set("setor",$setor);
    $pat->__set("fabricante",$fabricante);
    $pat->__set("fornecedor",$fornecedor);
    $pat->__set("valor",$valor);
    $pat->__set("depreciacao",$depreciacao);
    $pat->__set("quantidade",$quantidade);
    $pat->__set("localizacao",$localizacao);
    $pat->__set("aquisicao",$aquisicao);
    $pat->__set("id_usuario",$id_usuario);


  /*   echo "<pre>";
    print_r($arquivo);
    echo "</pre>"; */
   
   
    $action = new PatrimonioDb();
    $caminho = $action->cadastraPatrimonio($pat);

    echo $caminho;
    move_uploaded_file($arquivo['tmp_name'],$caminho.$arquivo['name']);
    header("Location: ../home.php");

}
catch(PDOException $e){
    echo "Erro de Cadastro de Item".$e->getMessage();
}

?>
