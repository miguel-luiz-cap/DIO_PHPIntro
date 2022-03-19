<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";
// $categorias[] = "idoso";

// print_r($categorias);
// var_dump($categorias);

$nome = "Eduardo";
$idade = 18;

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
