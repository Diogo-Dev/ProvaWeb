<?php

$nome_servidor="localhost";
$nome_usuario="root";
$senha="etecjau";
$nome_banco="banco";

$conexao= mysqli_connect($nome_servidor, $nome_usuario, $senha, $nome_banco);
mysqli_set_charset($conexao,"utf8");

if(mysqli_connect_error())
{
	echo "Erro na conexão:".mysqli_connect_error();
}

?>