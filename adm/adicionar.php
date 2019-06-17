<?php
  include_once('conexao.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <title> Sistema de cadastro de livros</title>

  <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script><style type="text/css"></style>
      
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
  <link rel="stylesheet" href="css/materialize.min.css">

  <link rel="stylesheet" href="js/materialize.min">
      
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript">$(document).ready(function(){
    $('select').formSelect();
  });</script>
</head> 
<body>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Livro </h3>
		<form action="cadastro.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="txt_livro" id="livro">
				<label for="livro">Livro</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="txt_autor" id="autor">
				<label for="autor">Autor</label>
			</div>

			<div class="input-field col s12">
    			<select name="cbo_genero">
      				<option value="">Selecione uma opção</option>
      				<?php
      				$sql = "SELECT * FROM genero ";
      				$resultado = mysqli_query($conexao,$sql);

      			if (mysqli_num_rows($resultado)>0) 
      			{

      			while ($dados = mysqli_fetch_array($resultado))
      			{ 
      				?>
      				<option value="<?php $dados['id']?>"><?php echo $dados['nome_genero'] ?></option>

      				<?php
      				}
      				}
      				?>
    			</select>
  			</div>

			<div class="input-field col s12">
				<input type="text" name="txt_imagem" id="imagem">
				<label for="imagem">Url da Imagem</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> Lista de livros </a>
		</form>
		
	</div>
</div>

 <!--JavaScript at end of body for optimized loading-->
  <script src="js/materialize.min"></script>
 </body>
  </html>