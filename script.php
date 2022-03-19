<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";
// $categorias[] = "idoso";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// var_dump($nome);
// var_dump($idade);

/* for($i = 0; $i < count($categorias); $i++) {
    switch($categorias[$i]) {
        case "infantil":
            echo "O nadador . $nome . compete na categoria infantil";
            break;
        case "adolescente":
            echo "O nadador . $nome . compete na categoria adolescente";
            break;
        default:
            echo "O nadador . $nome . compete na categoria adulto";
            break;
    }
} */

if(empty($nome)) {
    echo "O nome não pode ser vazio";
    return 0;
}

$NomeLen = strlen($nome);
if($NomeLen < 3) {
    echo "O Nome deve conter mais de 3 caracteres";
    return 0;
}
if($NomeLen > 30) {
    echo "O nome não pode ser extenso";
    return 0;
}
if(!is_numeric($idade)) {
    echo "Valor da Idade Invalida!";
    return 0;
}

if($idade >= 6 && $idade <= 12) {
    // echo "Infantil";
    for($i = 0; $i < count($categorias); $i++) {
        if($categorias[$i] == "infantil") 
            echo "O Nadador(a) " . $nome . " compete na categoria " . $categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18) {
    // echo "Adolescente";
    for($i = 0; $i < count($categorias); $i++) {
        if($categorias[$i] == "adolescente") 
            echo "O Nadador(a) " . $nome . " compete na categoria " . $categorias[$i];
    }
}
else {
    // echo "Adullto";
    for($i = 0; $i < count($categorias); $i++) {
        if($categorias[$i] == "adulto") 
            echo "O Nadador(a) " . $nome . " compete na categoria " . $categorias[$i];
    }
}
