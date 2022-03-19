<?php 
function validarNome(string $nome) : bool {
    if(empty($nome)) {
        setMensagem("O nome não pode ser vazio");
        return false;
    } else {
        $NomeLen = strlen($nome); // Joga o valor para uma variavel para nao precisar executar o mesmo comando 2x assim melhorando a performace
        if($NomeLen < 3) {
            setMensagem("O Nome deve conter mais de 3 caracteres");
            return false;
        }
        if($NomeLen > 30) {
            setMensagem("O nome não pode ser extenso");
            return false;
        }
    }
    return true;
}

function validarIdade(string $idade) : bool {
    if(!is_numeric($idade)) {
        setMensagem("Valor da Idade Invalida!");
        return false;
    }
    return true;
}