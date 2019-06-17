<?php
include_once('conexao.php');

if (isset($_POST['btn-atualizar'])){
	$codigo = $_POST['codigo'];
	$produto = $_POST['produto'];
	$descricao = $_POST['descricao'];
	$valor = $_POST['valor'];

	$id = $_POST['id'];

	$sql = "UPDATE tabela SET codigo = '$codigo', produto = '$produto', descricao = '$descricao' , valor = '$valor' WHERE id = '$id' ";

	if (mysqli_query($conexao, $sql)){
		echo "Registro Atualizado com Sucesso";

		#header( 'Location: index.php');
	}

	else
	{
		echo "Erro ao atualizar";

		#header( 'Location: index.php');
	}

	mysqli_close($conexao);
	
}

?>

