<?php
//inserindo arquivo de sessão.
include_once "sessao.php";
//buscando o valor do parametro id.
$id = filter_input(INPUT_GET,"id");
//incluindo arquivo de conexão no banco.
include_once "conectar.php";
//selecionando registro para excluir.
$deletar = "DELETE FROM associados WHERE id = '$id'";
//verifica se o id a ser deletado é igual a do banco.
if(mysqli_query($conn, $deletar)){
	print "<script>";
	print "alert('Registro excluído com sucesso!, pressione enter para continuar');";
	print "location='visualizar.php'";
	print "</script>";
}else{
	print "<script>";
	print "alert('Erro ao excluir registro, pressione enter para continuar!');";
	print "location='visualizar.php'";
	print "</script>";
}
?>