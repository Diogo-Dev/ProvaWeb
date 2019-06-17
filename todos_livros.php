<?php
include_once('conexao.php');
$genero = "";
?>
<html>
<head>
	<title>Livros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<div style="max-width: 1300px; margin-left: 15px">

	<div>
		<img src="imagens/banner.png" width="1300" height="175">
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">

    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home </a>
      <a class="nav-item nav-link" href="todos_livros.php">Todos os Livros</a>
      <a class="nav-item nav-link" href="recomendacoes.php">Recomendações</a>
      <a class="nav-item nav-link" href="sobre.php">Sobre</a>
      <a class="nav-item nav-link" href="adm/index.php">Area Restrita</a>
    </div>

  	</div>

	</nav>

	<br><br>

	<?php
	if ($genero != "") {
	?>

	<div style="background-color: #F8F8F8">
		<h2><?php echo "$genero" ?></h2>
	<div class="row">

	 <?php
	  $sql = "SELECT g.* FROM genero g where g.nome_genero = '$genero'";
      $resultado = mysqli_query($conexao,$sql); 

      if (mysqli_num_rows($resultado)>0){
      $dados = mysqli_fetch_array($resultado);
       }

      $sql = "SELECT l.nome_livro , l.autor , l.imagem  FROM  livros l inner join genero g 
      on (l.genero = g.id) where l.genero =".$dados['id'];
      $resultado2 = mysqli_query($conexao,$sql);

      if (mysqli_num_rows($resultado2)>0) 
      {
                while ($dados2 = mysqli_fetch_array($resultado2))
                {

                ?>
                  <div class="col-md-2">
                    <div class="card mb-2 shadow-sm">
                      <img src="<?php echo $dados2['imagem']; ?>" width="190" height="270">
                      <div class="card-body">
                      <p class="card-text"><?php echo $dados2['nome_livro']; ?>-<?php echo $dados2['autor']; ?></p>
                      </div>
                    </div>
                  </div>
                

     <?php
 }
}
?>

</div>
<?php
mysqli_close($conexao);

 }

 else{
 ?>

 	<div style="background-color: #F8F8F8">
		<h2>Todos os Livros</h2>
	<div class="row">

  <?php

      $sql1 = "SELECT * FROM genero ";
      $resultado3 = mysqli_query($conexao,$sql1);

      if (mysqli_num_rows($resultado3)>0) 
      {

      while ($dados3 = mysqli_fetch_array($resultado3))
      {

      ?>

	  <?php
      $sql4 = "SELECT l.nome_livro , l.autor , l.imagem  FROM  livros l inner join genero g 
      on (l.genero = g.id)where l.genero =".$dados3['id'];;
      $resultado4 = mysqli_query($conexao,$sql4);

      if (mysqli_num_rows($resultado4)>0) 
      {
                while ($dados4 = mysqli_fetch_array($resultado4))
                {

                ?>
                  <div class="col-md-2">
                    <div class="card mb-2 shadow-sm">
                      <img src="<?php echo $dados4['imagem']; ?>" width="190" height="270">
                      <div class="card-body">
                      <p class="card-text"><?php echo $dados4['nome_livro']; ?>-<?php echo $dados4['autor']; ?></p>
                      </div>
                    </div>
                  </div>                

     <?php
 }
}
?>

 <?php

 }
mysqli_close($conexao);

 ?>
</div>
</div>
<?php
}
}
?>
</body>
</html>
