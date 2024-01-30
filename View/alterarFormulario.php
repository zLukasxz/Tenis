<?php
include_once("header.php");
include_once("../Model/conexao.php");
include_once("../Model/bancoTenis.php");

extract($_REQUEST, EXTR_OVERWRITE);
$idTenis = isset($idTenis) ? $idTenis : "";
if ($idTenis){
    $tenis = buscarTenisId($conexao, $idTenis);
?>
    <div class="container">
        <form class="row g-3" method="Post" action="../Controller/alterarTenis.php">
        <input type="hidden" value="<?php echo ($tenis["idTenis"]);?>" name="idTenis">
            <div class="col-md-4">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" value="<?=$tenis["nomeTenis"]?>" name="nomeTenis" id="inputNome">
            </div>
            <div class="col-md-3">
                <label for="inputMarca" class="form-label">Marca</label>
                <input type="text" class="form-control" value="<?=$tenis["marcaTenis"]?>" name="marcaTenis" id="inputMarca">
            </div>
            <div class="col-md-2">
                <label for="inputValor" class="form-label">Valor</label>
                <input type="text" class="form-control" value="<?=$tenis["valorTenis"]?>" name="valorTenis" id="inputValor">
            </div>
            <div class="col-md-8">
                <label for="inputCor" class="form-label">Cor</label>
                <input type="text" class="form-control" value="<?=$tenis["corTenis"]?>" name="corTenis" id="inputCor">
            </div>
            <div class="col-md-8">
                <label for="inputImagem" class="form-label">Imagem</label>
                <input type="text" class="form-control" value="<?=$tenis["imagemTenis"]?>" name="imagemTenis" id="inputCor">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
        </form>
    </div>
<?php
} else {
    echo("Dados não encontrados");
};
include_once("footer.php");
?>