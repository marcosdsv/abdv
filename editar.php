<?php
//declaração de variáveis que busca as informações do form.
$id = filter_input(INPUT_GET,"id");
$nome = filter_input(INPUT_POST,"nome");
$endereco = filter_input(INPUT_POST,"endereco");
$telefone = filter_input(INPUT_POST,"telefone");
$rg = filter_input(INPUT_POST,"rg");
$cpf = filter_input(INPUT_POST,"cpf");
$email = filter_input(INPUT_POST,"email");
$trabalha = filter_input(INPUT_POST,"trabalha");
$tipo = filter_input(INPUT_POST,"tipo");
//inserindo arquivo de conexão com o banco.
include_once "conectar.php";
$sql = "UPDATE associados SET nome= '$nome', endereco= '$endereco', telefone= '$telefone', rg= '$rg', cpf= '$cpf', email= '$email', trabalha= '$trabalha', tipo= '$tipo'";
//executa a query do sql.
if(mysqli_query($conn, $sql)){
	print "<script>";
	print "alert('Editado com sucesso!, pressione enter para continuar');";
	print "location='visualizar.php'";
	print "</script>";
}else{
	print "<script>";
	print "alert('Não foi possível editar o usuário!, pressione enter e tente novamente');";
	print "location='editarDados.php'";
	print "</script>";
}

?>