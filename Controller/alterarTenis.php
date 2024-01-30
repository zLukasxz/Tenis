<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoTenis.php");
include_once("../View/header.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(alterarTenis($conexao,$idTenis,$nomeTenis,$marcaTenis,$valorTenis,$corTenis,$imagemTenis)){
    echo("As informações do Tênis foram salvas.");
}else{
    echo("Algo deu errado! As informações do Tênis não foram salvas.");
}
?>