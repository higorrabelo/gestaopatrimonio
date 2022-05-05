<?
require "../modelos/PatrimonioDb.php";

$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$fornecedor = $_POST['fornecedor'];
$quantidade = $_POST['quantidade'];
$localizacao = $_POST['localizacao'];
$arquivo = $_POST['arquivo'];
$tipo = $_POST['tipo'];
$setor = $_POST['setor'];
$valor = $_POST['valor'];
$depreciacao = $_POST['depreciacao'];
$data = $_POST['data'];
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
    $pat->__set("imagem",$imagem);
    $pat->__set("quantidade",$quantidade);
    $pat->__set("localizacao",$localizacao);
    $pat->__set("aquisicao",$aquisicao);
    $pat->__set("id_usuario",$id_usuario);

    $action= new PatrimonioDb();

    $action->cadastraPatrimonio($pat);

    header("Location: ../home.php");

}
catch(PDOException $e){
    echo "Erro de Cadastro de Item".$e->getMessage();
}

?>
