<?php
//declaração de variáveis que pega a informação do formulário cadastro.php.
$nome = strtoupper(filter_input(INPUT_POST,"nome"));
$endereco = strtoupper(filter_input(INPUT_POST,"endereco"));
$telefone = filter_input(INPUT_POST,"telefone");
$celular = filter_input(INPUT_POST,"celular");
$rg = filter_input(INPUT_POST,"rg");
$cpf = filter_input(INPUT_POST,"cpf");
$email = strtolower(filter_input(INPUT_POST,"email"));
$datanascimento = filter_input(INPUT_POST,"datanascimento");
$tipodeficiencia = strtoupper(filter_input(INPUT_POST,"tipodeficiencia"));
$tipoassociado = strtoupper(filter_input(INPUT_POST,"tipoassociado"));
$tipocargo = strtoupper(filter_input(INPUT_POST,"trabalha"));
$tipo = strtoupper(filter_input(INPUT_POST,"tipo"));
//Inserindo o arquivo de conexão com o banco de dados.
include_once "conectar.php";
$query = "SELECT cpf FROM associados WHERE cpf = '$cpf'";
$select = mysqli_query($conn, $query);
$array = mysqli_fetch_array($select);
$logarray = $array['cpf'];
if($logarray == $cpf){
	print "<script>";
	print "alert('Esse usuário já existe!, pressione enter para continuar');";
	print "location='cadastro.php'";
	print "</script>";
	die();
	
}else{
//Inserindo os registros pegado pelas variáveis do form cadastro.php.
$sql = "INSERT INTO associados(nome, endereco, telefone, celular, rg, cpf, email, datanascimento, tipodeficiencia, tipoassociado, trabalha, tipo) VALUES ('$nome', '$endereco', '$telefone', '$celular', '$rg', '$cpf', '$email', '$datanascimento', '$tipodeficiencia', '$tipoassociado', '$trabalha', '$tipo')";
$registros = mysqli_query($conn, $sql);
if($registros){
	print "<script>";
	print "alert('Cadastrado com sucesso!, pressione enter para continuar');";
	print "location='cadastro.php'";
	print "</script>";
}else{
	print "<script>";
	print "alert('Erro ao cadastrar!, pressione enter para continuar');";
	print "location='cadastro.php'";
	print "</script>";
}
}
?>