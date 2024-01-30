<?php
include_once("header.php")
?>
    <div class="container">
        <form class="row g-3" method="Post" action="../Controller/adicionarTenis.php">
            <div class="col-md-4">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nomeTenis"id="inputNome">
            </div>
            <div class="col-md-3">
                <label for="inputFone" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marcaTenis"id="inputMarca">
            </div>
            <div class="col-md-2">
                <label for="inputFone" class="form-label">Valor</label>
                <input type="decimal" class="form-control" name="valorTenis"id="inputValor">
            </div>
            <div class="col-md-3">
                <label for="inputFone" class="form-label">Cor</label>
                <input type="text" class="form-control" name="corTenis"id="inputCor">
            </div>
            <div class="col-md-3">
                <label for="inputFone" class="form-label">Imagem</label>
                <input type="text" class="form-control" name="imagemTenis"id="inputImagem">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
        </form>
    </div>

<?php
include_once("footer.php");
?>