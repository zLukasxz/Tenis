<?php
function cadastrarTenis($conexao,$nomeTenis,$marcaTenis,$valorTenis,$corTenis,$imagemTenis){
    $query = "insert into tenisdb(nomeTenis,marcaTenis,valorTenis,corTenis,imagemTenis)values('{$nomeTenis}','{$marcaTenis}','{$valorTenis}','{$corTenis}','{$imagemTenis}')";
    return mysqli_query($conexao,$query);
}

function buscarTenisNome($conexao,$nomeTenis){
    $query = "Select * from tenisdb where nomeTenis like '%{$nomeTenis}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function buscarTenisId($conexao,$idTenis){
    $query = "Select * from tenisdb where idTenis like '%{$idTenis}%'";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
}

function deletarTenis($conexao,$idTenis){
    $query = "Delete from tenisdb where idTenis = '{$idTenis}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function alterarTenis($conexao,$idTenis,$nomeTenis,$marcaTenis,$valorTenis,$corTenis,$imagemTenis){
    $query = "update tenisdb set nomeTenis='{$nomeTenis}',marcaTenis='{$marcaTenis}',valorTenis='{$valorTenis}',corTenis='{$corTenis}',imagemTenis='{$imagemTenis}' where idTenis='{$idTenis}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

?>