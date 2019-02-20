<?php

// inicia o manipulador de sessão
session_start();

// recupera o nome do identificador de sessão
$cookie_name = $_SESSION['username'];

// elimina todas as informações relacionadas à sessão atual
session_destroy();

// encerra o manipulador de sessão
session_write_close();

// limpa o cookie identificador de sessão
setcookie($_SESSION['username'], '', time());

echo "Deslogado! <br><br>";

echo "</br> <a href='../index.html'><button> Voltar login </button></a>";

?>