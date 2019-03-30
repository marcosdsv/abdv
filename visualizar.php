<?php
include_once "sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>ABDV Usuários cadastrados</title>
</head>
<body>
<table border=2>
<tr>
<th>Nome</th>
<th>Endereço</th>
<th>telefone</th>
<th>RG</th>
<th>CPF</th>
<th>E-mail</th>
<th>Trabalha</th>
<th>Profição</th>
</tr>
<?php
//incluindo o arquivo de conexão.
include_once "conectar.php";
//variável que pega as informações do banco.
$sql = "SELECT * FROM associados";
//executa as informações e armazena.
$resultado = mysqli_query($conn, $sql);
//Verifica se retornou registro.
if(mysqli_num_rows($resultado)){
//Enquanto estiver buscando registro na variável.
	while($array = mysqli_fetch_assoc($resultado)){
		?>
	<tr>
		<td><?=$array['nome']?></td>
		<td><?=$array['endereco']?></td>
		<td><?=$array['telefone']?></td>
		<td><?=$array['rg']?></td>
		<td><?=$array['cpf']?></td>
		<td><?=$array['email']?></td>
		<td><?=$array['trabalha']?></td>
		<td><?=$array['tipo']?></td>
		</tr>
		<?php
	}//aqui tem uma chave
}//aqui tem outra chave
?>
</table>
<a href="cadastro.php">Cadastrar associado</a><br>
<a href="menu.php">Voltar ao menu</a>
</body>
</html>