<?php
require_once("../model/conexao.php");
require_once("../model/bancoTenis.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deletarTenis($conexao,$idTenis)){
    echo("As informações do Tênis foram deletadas.");
}else{
    echo("Algo deu errado! As informações do Tênis não foram salvas.");
}
?>