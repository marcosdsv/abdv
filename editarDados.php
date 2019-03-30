<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>ABDV Cadastro de Associados</title>
</head>
<body>
<h2>Cadastro de associados</h2><br>
<a href="visualizar.php">Voltar</a>
<?php
//buscando o valor do id pelo parametro.
$id = filter_input(INPUT_GET,"id");
//incluíndo o arquivo de conexão do banco.
include_once "conectar.php";
//armazenando o id na variável.
$sql = "SELECT * FROM associados WHERE id='$id'";
//executa o id do banco.
$resultado = mysqli_query($conn, $sql) or die('Erro na execução');
$array = mysqli_fetch_assoc($resultado);
?>

	<form method="POST" action="editar.php">
	<input type="hidden" name="id" value="<?=$array['id']?>">
<label>Nome: </label>
	<input type="text" name="nome" value="<?=$array['nome']?>" placeholder="Digite nome completo"><br>
<label>Endereço: </label><br>
	<input type="text" name="endereco" value="<?=$array['endereco']?>" placeholder="Digite o endereço"><br>
<label>Número telefone: </label>
	<input type="text" name="telefone" value="<?=$array['telefone']?>" placeholder="Digite o Telefone"><br>
<label>RG: </label>
	<input type="text" name="rg" value="<?=$array['rg']?>" placeholder="Digite o RG"><br>
<label>CPF: </label>
	<input type="text" name="cpf" value="<?=$array['cpf']?>" placeholder="Digite o CPF"><br>
<label>E-mail: </label>
	<input type="email" name="email" value="<?=$array['email']?>" placeholder="Digite o E-mail"><br>
	<label>Trabalha: </label>
	<select name="trabalha">
	<option>...</option>
	<option>Sim</option>
	<option>Não</option>
	</select>
	<label>Profissão: </label>
	<select name="tipo">
	<option>Empresa privada</option>
	<option>Empresa pública</option>
	<option>Auxilio doença</option>
	<option>BPC
</option>
	<option>Aposentado</option>
	</select>
	<input type="submit" value="Salvar alteração">
	</form>
</body>
</html>