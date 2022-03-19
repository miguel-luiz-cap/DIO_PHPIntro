<?php
session_start();

function redirectToIndex() : void {
    header("location: index.php");
}
function setMensagem(string $mensagem) : void {
    $_SESSION["msg"] = $mensagem;
}

function getMensagem() : string {

    if(isset($_SESSION["msg"]))
        return $_SESSION["msg"];

    return null;
}

function clearMensagem() : void {
    if(isset($_SESSION["msg"]))
        unset($_SESSION["msg"]);
}