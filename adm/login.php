<!DOCTYPE html>
<html>
<head>
	<title>Administrativo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/materialize.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div class="row">
	<div class="col s12 m6 push-m3">
	<h1>Acesso Restrito</h1><br>

	<form action="validar_usuario.php" method="POST">
		<div>
			<label><font color="black" size="4" ><b>Usuário:</b></font></label>
			<input type="text" name="txt_usuario" placeholder="Usuário" required="">
		</div>
		<div>
			<label><font color="black" size="4"><b>Senha:</b></font></label>
			<input type="text" name="txt_usuario" placeholder="*****" required="">
		</div>
		<br>
		<div>
			<button type="submit" class="waves-effect waves-light btn-large">Autentica</button>
			<a href="" class="waves-effect waves-light btn-large red">Limpar</a><br><br>
			<a href="cadastro_usuario.php" class="waves-effect waves-light btn-large green">Cadastro</a>
		</div>


	</form>

	</div>
</div>

<script src="js/materialize.min.js"></script>

</body>
</html>