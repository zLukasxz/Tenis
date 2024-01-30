<?php
include_once("header.php");
include_once("../Model/conexao.php");
include_once("../Model/bancoTenis.php");
?>
<div class="container m-4">
<form class="row g-3" method="POST" action="#">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputCodigo" class="col-form-label">Digite o Nome</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputCodigo" name="nomeTenis" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-dark">Buscar</button>
    </div>
</form>
</div>

<!--Início da Tabela-->

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Marca</th>
      <th scope="col">Valor</th>
      <th scope="col">Cor</th>
      <th scope="col">Imagem</th>
    </tr>
  </thead>
  <tbody>
  <?php
      extract($_REQUEST,EXTR_OVERWRITE);
      $nomeTenis = isset($nomeTenis)?$nomeTenis : "";
      if($nomeTenis){
        $dados = buscarTenisNome($conexao,$nomeTenis);
        foreach($dados as $tenis) :
    ?>
    <tr>
      <th scope="row"><?php echo($tenis["idTenis"]);?></th>
      <td><?=$tenis["nomeTenis"]?></td>
      <td><?=$tenis["marcaTenis"]?></td>
      <td><?=$tenis["valorTenis"]?></td>
      <td><?=$tenis["corTenis"]?></td>
      <td><img src="<?=$tenis["imagemTenis"]?>"></td>
      <style>
        img{
        max-width: 75px;
        max-height: 75px;
        }
    </style>

        <style>
          th,td{
            border: 1px solid #ddd;
            text-align: center;
            vertical-align: middle;
          }
        </style>
    </tr>
    <?php endforeach;}
    ?>
  </tbody>
</table>
</div>
<!-- Fim da Tabela-->

<?php
include_once("footer.php");
?>