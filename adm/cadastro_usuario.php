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
	<h1>Cadastro de Usuario</h1><br>

	<form action="adicionar_usuario" method="POST">
		<div>
			<label><font color="black" size="4" ><b>Nome:</b></font></label>
			<input type="text" name="txt_nome" placeholder="Nome" required="">
		</div>
		<div>
			<label><font color="black" size="4" ><b>Usuário:</b></font></label>
			<input type="text" name="txt_usuario" placeholder="Usuário" required="">
		</div>
		<div>
			<label><font color="black" size="4"><b>Senha:</b></font></label>
			<input type="password" name="txt_senha" placeholder="*****" required="">
		</div>
		<div>
			<label><font color="black" size="4" ><b>Email:</b></font></label>
			<input type="email" name="txt_email" placeholder="exemplo@mail.com" required="">
		</div>
		<br>
		<div>
			<button type="submit" class="waves-effect waves-light btn-large" name="btn_cadastrar">Cadastrar</button>
			<a href="login.php">Já possui cadastro?! Faça Login!</a>
		</div>


	</form>

	</div>
</div>

<script src="js/materialize.min.js"></script>

</body>
</html>