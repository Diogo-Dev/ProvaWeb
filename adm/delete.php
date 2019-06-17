<?php
include_once('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM tabela WHERE id='$id'";

if(mysqli_query($conexao, $sql))
{
	echo"sucesso";
	header('Location:index.php');
}
else
{
	die('não inseriu' . @mysqli_error($conexao));
	header('Location:index.php');
}
mysqli_close($conexao);
?>