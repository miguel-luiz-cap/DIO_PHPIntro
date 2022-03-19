<?php
session_start();
$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";
// $categorias[] = "idoso";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$redirectPage = "index.php";

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
    $_SESSION["msg"] = "O nome não pode ser vazio";
    header("location:" . $redirectPage);
    return 0;
}
$NomeLen = strlen($nome); // Joga o valor para uma variavel para nao precisar executar o mesmo comando 2x assim melhorando a performace
if($NomeLen < 3) {
    $_SESSION["msg"] = "O Nome deve conter mais de 3 caracteres";
    header("location:" . $redirectPage);
    return 0;
}
if($NomeLen > 30) {
    $_SESSION["msg"] = "O nome não pode ser extenso";
    header("location:" . $redirectPage);
    return 0;
}
if(!is_numeric($idade)) {
    $_SESSION["msg"] = "Valor da Idade Invalida!";
    header("location:" . $redirectPage);
    return 0;
}

if($idade >= 6 && $idade <= 12) {
    // echo "Infantil";
    for($i = 0; $i < count($categorias); $i++) {
        if($categorias[$i] == "infantil") {
            $_SESSION["msg"] = "O Nadador(a) " . $nome . " compete na categoria " . $categorias[$i];
            break; // Parar o loop quando localizar para melhorar a performace
        }
    }
}
else if($idade >= 13 && $idade <= 18) {
    // echo "Adolescente";
    for($i = 0; $i < count($categorias); $i++) {
        if($categorias[$i] == "adolescente") {
            $_SESSION["msg"] = "O Nadador(a) " . $nome . " compete na categoria " . $categorias[$i];
            break; // Parar o loop quando localizar para melhorar a performace 
        }
    }
}
else {
    // echo "Adullto";
    for($i = 0; $i < count($categorias); $i++) {
        if($categorias[$i] == "adulto") {
            $_SESSION["msg"] = "O Nadador(a) " . $nome . " compete na categoria " . $categorias[$i];
            break; // Parar o loop quando localizar para melhorar a performace  
        }
    }
}
header("location:" . $redirectPage);