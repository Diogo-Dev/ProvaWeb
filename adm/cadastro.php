<?php
include_once ('conexao.php');

$livro = $_POST['txt_livro'];
$autor= $_POST['txt_autor'];
$genero = $_POST['cbo_genero'];
$imagem = $_POST['txt_imagem'];

$sql = "insert into livros (nome_livro,autor,genero,imagem) values ('$livro','$autor', $genero ,'$imagem')";

$resultado = @mysqli_query($conexao, $sql);

if($resultado)
{
	echo "Dados inseridos no banco com sucesso";
	#header('Location:index.php');
}

else
{
	die('Não inseriu:' . @mysqli_error($conexao));
	#header('Location:index.php');
}

mysqli_close($conexao);

?>