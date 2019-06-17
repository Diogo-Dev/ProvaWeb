<?php

include_once('conexao.php');
?>


<html>
<head>
	<meta charset="utf-8">
	<title> Sistema de Cadastro de Produtos</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<?php
if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$sql = "SELECT * FROM tabela WHERE id = '$id'";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado); 
}
?>
<body>

	<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Produto </h3>
		<form action="update.php" method="POST">


			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">


			<div class="input-field col s12">
				<input type="text" name="codigo" id="codigo" value="<?php echo $dados['codigo'];?>">
				<label for="codigo">Codigo</label>
			</div>


			<div class="input-field col s12">
				<input type="text" name="produto" id="produto" value="<?php echo $dados['produto'];?>">
				<label for="produto">Produto</label>
			</div>


			<div class="input-field col s12">
				<input type="text" name="descricao" id="descricao" value="<?php echo $dados['descricao'];?>">
				<label for="descricao">Descrição</label>
			</div>


			<div class="input-field col s12">
				<input type="text" name="valor" id="valor" value="<?php echo $dados['valor'];?>">
				<label for="valor">Valor</label>
			</div>
			

			<button type="submit" name="btn-atualizar" class="btn"> Atualizar </button>
			<a href="index.php" class="btn green"> Lista de produtos </a>
		</form>
		
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>
</html>