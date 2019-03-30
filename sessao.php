<?php
//inicia sessão.
session_start();
//verifica se a sessão está vazia.
if(empty($_SESSION['logado'])){
	print "<script>";
	print "alert('Sem permição de acesso!, pressione enter para continuar');";
	print "location='index.php'";
	print "</script>";
}
if(filter_input(INPUT_GET,"sair") == "ok"){
	unset($_SESSION['logado']);
	//destroe a sessão.
	session_destroy();
	//redireciona para o login.
	header("location: index.php");
	}
?>