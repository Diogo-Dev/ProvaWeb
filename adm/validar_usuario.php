<?php
session_start(); //Inicializa a sessão para o usuario
include_once('conexao.php');

if (isset($_SESSION['usuario'])) //Verifica se o usuario esta logado na sessão 
{
	session_unset(); //Se estiver, limpe o usuario
	session_destroy(); //Destrua a sessão limpando o usuario
	session_start(); //Inicializa nova sessão para o usuario
}
if (isset($_POST['txt_usuario']) and isset($_POST['txt_senha']))
{
	//Recebe os dados enviados do formulario de login
	$usuario = $_POST['txt_usuario'];
	$senha = $_POST['txt_senha'];
	# Montagem da instrução SQL que checa usuário e senha no banco
	$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = md5('$senha')";
	# Executa a instrução SQL no banco de dados
	$resultado = mysqli_query($conexao, $sql);

	if (mysqli_num_rows($resultado) == 0 ) 
	{
		function myAlert($msg , $url)
		{
			echo '<script language="javascript">alert("'.$msg.'");</script>';
			echo "<script> document.location = '$url'</script>";
		}
		myAlert("Usuário ou senha incorretos! Verifique os dados inseridos!", "login.php");
	}
	else
	{
		$_SESSION['autenticado'] = "rfc822_allowed";
		$_SESSION['usuario'] = $usuario;
		header('Location:index.php');
	}
}

mysqli_close($conexao);


?>