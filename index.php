<?php 
include "servicos/sessao.php";
include "servicos/validacao.php";
include "servicos/categoria.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino</title>
</head>
<body>
    <p>Formulário para inscrição</p>

    <form action="script.php" method="post">
        <?php 
            $mensagem = getMensagem();
            if(!empty($mensagem))
                echo $mensagem . "<br/>";
        ?>
        <p>Nome: <input type="text" name="nome" /> </p>
        <p>Idade: <input type="text" name="idade" /> </p>
        <p><input type="submit" value="Enviar" /></p>
    </form>
    
</body>
</html>