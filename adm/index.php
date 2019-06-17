<?php
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de cadastro de Livros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/materialize.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<div class="row">
	<div class="col s12 m8 push-m2">
	<h3 class="light">Livros Cadastrados</h3>

	<table border=1 class="striped">
	<thead>
		<tr>
			<th>Código</th>
			<th>Livro</th>
			<th>Autor</th>
			<th>Genero</th>
		</tr>
	</thead>
		<tbody>
			<?php

			$sql = "SELECT l.*, g.nome_genero FROM livros l inner join genero g on (l.genero = g.id)";
			$resultado = mysqli_query($conexao,$sql);

			if (mysqli_num_rows($resultado)>0) 
			{

			while ($dados = mysqli_fetch_array($resultado))
			{

			?>

			<tr>
				<td><?php echo $dados['id']; ?></td>
				<td><?php echo $dados['nome_livro']; ?></td>
				<td><?php echo $dados['autor']; ?></td>
				<td><?php echo $dados['nome_genero']; ?></td>
				<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
				<td><a href="delete.php?id=<?php echo $dados['id']; ?>" class="btn-floating green"><i class="material-icons">delete</i></a></td>
			</tr>

			<?php

			}
			}
			mysqli_close($conexao);
			?>

		</tbody>

	</table>
	<a href="adicionar.php" class="btn">Adicionar produtos</a>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>
</html>
	