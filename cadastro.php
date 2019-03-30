<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>ABDV Cadastro de Associados</title>
</head>
<body>
<h2>Cadastro de associados</h2><br>
	<form method="POST" action="validar.php" autocomplete="off">
<label>Nome: </label>
	<input type="text" name="nome" autofocus required placeholder="Digite nome completo"><br>
<label>Endereço: </label><br>
	<input type="text" name="endereco" required placeholder="Digite o endereço"><br>
<label>Número telefone: </label>
	<input type="text" name="telefone" required placeholder="Digite o Telefone"><br>
<label>RG: </label>
	<input type="text" name="rg" required placeholder="Digite o RG"><br>
<label>CPF: </label>
	<input type="text" name="cpf" required placeholder="Digite o CPF"><br>
<label>E-mail: </label>
	<input type="email" name="email" required placeholder="Digite o E-mail"><br>
	<label>Trabalha: </label>
	<select name="trabalha">
	<option>...</option>
	<option>Sim</option>
	<option>Não</option>
	</select>
	<label>Profissão: </label>
	<select name="tipo">
	<option>...</option>
	<option>Empresa privada</option>
	<option>Empresa pública</option>
	<option>Auxilio doença</option>
	<option>BPC</option>
	<option>Aposentado</option>
	</select>
	<input type="submit" value="Salvar">
	</form>
	<a href="visualizar.php">Visualizar associados</a><br>
	<a href="menu.php">Voltar ao menu</a>
</body>
</html>