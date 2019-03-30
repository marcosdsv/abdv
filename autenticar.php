<?php
//inicia sessão.
session_start();
$email = filter_input(INPUT_POST,"email");
$senha = filter_input(INPUT_POST,"senha");
//estabelecendo conexão com o banco de dados.
include_once "conectar.php";
$sql = "SELECT * FROM login WHERE email='$email' AND senha='$senha'";
$resultado = mysqli_query($conn, $sql);
//verifica se retornou registro.
if(mysqli_num_rows($resultado)){
	$_SESSION['logado'] = true;
	//redireciona para outro sistema;
	header("location:menu.php");
}else{
	print "<script>";
	print "alert('Erro ao logar!, pressione enter para continuar');";
	print "location='index.php'";
	print "</script>";
}
?>