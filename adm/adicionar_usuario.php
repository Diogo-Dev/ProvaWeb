<?php 
include_once('conexao.php');

if (isset($_POST['btn_cadastrar'])) 
{
	$nome = mysqli_real_escape_string ($conexao, $_POST['txt_nome']);
	$usuario = mysqli_real_escape_string ($conexao, $_POST['txt_usuario']);
	$senha = mysqli_real_escape_string ($conexao, md5($_POST['txt_senha']));
	$email = mysqli_real_escape_string ($conexao, $_POST['txt_email']);
}

	$sql = $conexao->query ("SELECT * FROM usuario WHERE email='$email'");
	if (mysqli_num_rows($sql)>0) 
	{
		echo "Esse email já foi cadastrado";
		exit();
	}

	else
	{

		if(!$conexao->query("INSERT INTO usuario (nome, usuario, senha, email) VALUES ('$nome','$usuario','$senha','$email')"))
		
		die('O dados não foram inseridos'. @mysqli_error($conexao));

		function myAlert($msg , $url)
		{
			echo '<script language="javascript">alert("'.$msg.'");</script>';
			echo "<script> document.location = '$url'</script>";
		}
		myAlert("Cadastro Concluido!", "login.php");

		mysqli_close($conexao);
	}

?>