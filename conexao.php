<?php

$servidor = "localhost";
$usuario  = "root";
$senha = "";
$tabela = "projeto";
$conexao = mysql_connect($servidor,$usuario,$senha);
mysql_select_db($tabela);
?>