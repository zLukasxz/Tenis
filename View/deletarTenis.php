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

<table class="table">
  <thead>
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Marca</th>
        <th scope="col">Valor</th>
        <th scope="col">Cor</th>
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
      <td>
        '<button type="button" idtenis="<?php echo($tenis["idTenis"]);?>" nometenis="<?=$tenis["nomeTenis"]?>" marcatenis="<?=$tenis["marcaTenis"]?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarModal">Deletar</button>
      </td>
    </tr>
    <?php endforeach;}
    ?>
  </tbody>
</table>
</div>
<!-- Fim da Tabela-->

<div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Tênis</h1>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
        <form action="../Controller/deletarTenis.php" method="post">
          <input type="hidden" values="" class="idTenis from-control" name="idTenis">
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  let deletarTenisModal = document.getElementById('deletarModal');
    deletarTenisModal.addEventListener('show.bs.modal', function(event) {
    let button = event.relatedTarget;
    let idTenis = button.getAttribute('idtenis');
    let nome_tenis = button.getAttribute('nometenis');
    let marca_tenis = button.getAttribute('marcatenis');

    let modalBody = deletarTenisModal.querySelector('.modal-body');
    modalBody.textContent = 'Deseja realmente excluir o Tenis: ' + nome_tenis + " da Marca: " + marca_tenis + " - Código: " + idTenis + '?'

    let IDTenis = deletarTenisModal.querySelector('.modal-footer .idTenis');
    IDTenis.value = idTenis;
  })
</script>
<?php
include_once("footer.php");
?>