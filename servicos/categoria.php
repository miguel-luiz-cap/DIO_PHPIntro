<?php 
function defineCategoria(string $nome, string $idade) 
{
    $categorias = [];
    $categorias[] = "infantil";
    $categorias[] = "adolescente";
    $categorias[] = "adulto";
    // $categorias[] = "idoso";

    if(validarNome($nome) && validarIdade($idade)) {
        if($idade >= 6 && $idade <= 12) {
            // echo "Infantil";
            for($i = 0; $i < count($categorias); $i++) {
                if($categorias[$i] == "infantil") {
                    setMensagem("O Nadador(a) " . $nome . " compete na categoria " . $categorias[$i]);
                    // break; // Parar o loop quando localizar para melhorar a performace
                    return null;
                }
            }
        }
        else if($idade >= 13 && $idade <= 18) {
            // echo "Adolescente";
            for($i = 0; $i < count($categorias); $i++) {
                if($categorias[$i] == "adolescente") {
                    setMensagem("O Nadador(a) " . $nome . " compete na categoria " . $categorias[$i]);
                    // break; // Parar o loop quando localizar para melhorar a performace 
                    return null;
                }
            }
        }
        else {
            // echo "Adullto";
            for($i = 0; $i < count($categorias); $i++) {
                if($categorias[$i] == "adulto") {
                    setMensagem("O Nadador(a) " . $nome . " compete na categoria " . $categorias[$i]);
                    // break; // Parar o loop quando localizar para melhorar a performace  
                    return null;
                }
            }
        }
    }
    else 
        return getMensagem();

    //return null;
}