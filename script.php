<?php
include "servicos/sessao.php";
include "servicos/validacao.php";
include "servicos/categoria.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoria($nome, $idade);
redirectToIndex();