<?php
//inserindo arquivo de sessão.
include_once "sessao.php";
//declaração de variáveis que busca as informações do form.
$id = filter_input(INPUT_GET,"id");
$nome = filter_input(INPUT_POST,"nome");
$endereco = filter_input(INPUT_POST,"endereco");
$telefone = filter_input(INPUT_POST,"telefone");
$celular = filter_input(INPUT_POST,"celular");
$rg = filter_input(INPUT_POST,"rg");
$cpf = filter_input(INPUT_POST,"cpf");
$email = filter_input(INPUT_POST,"email");
$datanascimento = filter_input(INPUT_POST,"datanascimento");
$tipodeficiencia = filter_input(INPUT_POST,"tipodeficiencia");
$tipoassociado = filter_input(INPUT_POST,"tipoassociado");
$trabalha = filter_input(INPUT_POST,"trabalha");
$tipo = filter_input(INPUT_POST,"tipo");
//inserindo arquivo de conexão com o banco.
include_once "conectar.php";
$sql = "UPDATE associados SET nome= '$nome', endereco= '$endereco', telefone= '$telefone', celular= '$celular', rg= '$rg', cpf= '$cpf', email= '$email', datanascimento= '$datanascimento', tipodeficiencia= '$tipodeficiencia', tipoassociado= '$tipoassociado', trabalha= '$trabalha', tipo= '$tipo'";

//executa a query do sql.
$atualizado = mysqli_query($conn, $sql);
//print_r($atualizado);

if($atualizado){
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