<?php
require_once("../model/conexao.php");
require_once("../model/bancoTenis.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(cadastrarTenis($conexao,$nomeTenis,$marcaTenis,$valorTenis,$corTenis,$imagemTenis)){
    echo("As informações do Tênis foram salvas.");
}else{
    echo("Algo deu errado! As informações do Tênis não foram salvas.");
}
?>