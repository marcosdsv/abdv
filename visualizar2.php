<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Usuários cadastrados</title>
</head>
<body>
<table border=2>
<caption>Tabela de associados</caption>
<tr>
<th>Nome</th>
<th>Endereço</th>
<th>Telefone</th>
<th>Celular</th>
<th>RG</th>
<th>CPF</th>
<th>E-mail</th>
<th>Data de nascimento</th>
<th>Tipo de deficiência</th>
<th>Tipo de associado</th>
<th>Trabalha</th>
<th>Profição</th>
<th>Ação</th>
</tr>
<?php
//$pesquisa = filter_input(INPUT_POST,"pesquisa");
$nome = filter_input(INPUT_POST,"nome");
$email = filter_input(INPUT_POST,"email");
$cpf = filter_input(INPUT_POST,"cpf");
//incluindo o arquivo de conexão.
include_once "conectar.php";
if($nome != ""){
//variável que pega as informações do banco.
$sql = "SELECT * FROM associados WHERE nome like '%$nome%';";
//executa as informações e armazena.
$resultado = mysqli_query($conn, $sql);
}
if($email != ""){
//variável que pega as informações do banco.
$sql = "SELECT * FROM associados WHERE email like '%$email%';";
//executa as informações e armazena.
$resultado = mysqli_query($conn, $sql);
}
if($cpf != ""){
//variável que pega as informações do banco.
$sql = "SELECT * FROM associados WHERE cpf like '%$cpf%';";
//executa as informações e armazena.
$resultado = mysqli_query($conn, $sql);
}

//Enquanto estiver buscando registro na variável.
	while($dados = mysqli_fetch_assoc($resultado)){
$nome = ucwords(strtolower($dados['nome']));
$endereco = ucwords(strtolower($dados['endereco']));
$tel = $dados['telefone'];
$ddd = substr($tel, 0, 2);
$pridig = substr($tel, 2, 4);
$segdig = substr($tel, 6, 4);
$telefone = '('.$ddd.')'.$pridig.'-'.$segdig;
$cel = $dados['celular'];
$ddd = substr($cel, 0, 2);
$pridig = substr($cel, 2, 5);
$segdig = substr($cel, 7, 4);
$celular = '('.$ddd.')'.$pridig.'-'.$segdig;
$rg = $dados['rg'];
$cpfmas = $dados['cpf'];
$c = substr($cpfmas, 0, 3);
$p = substr($cpfmas, 3, 3);
$f = substr($cpfmas, 6, 3);
$u = substr($cpfmas, 9, 2);
$cpf = $c.'.'.$p.'.'.$f.'-'.$u;
$email = strtolower($dados['email']);
$datanascimento = date('d/m/Y', strtotime($dados['datanascimento']));
$tipodeficiencia = ucwords(strtolower($dados['tipodeficiencia']));
$tipoassociado = ucwords(strtolower($dados['tipoassociado']));
$trabalha = ucwords(strtolower($dados['trabalha']));
$tipo = ucwords(strtolower($dados['tipo']));
?>
<tr>
<td><?php echo $nome;?></td>
<td><?php echo $endereco;?></td>
<td><?php echo $telefone;?></td>
<td><?php echo $celular;?></td>
<td><?php echo $rg;?></td>
<td><?php echo $cpf;?></td>
<td><?php echo $email;?></td>
<td><?php echo $datanascimento;?></td>
<td><?php echo $tipodeficiencia;?></td>
<td><?php echo $tipoassociado;?></td>
<td><?php echo $trabalha;?></td>
<td><?php echo $tipo;?></td>
		<td>
		<a href="editarDados.php?id=<?=$dados['id']?>">Editar associado</a><br>
		<a href="excluir.php?id=<?=$dados['id']?>"
		onclick="return confirm('Confirma a exclusão desse registro?')">Excluir</a>
		</td>
		</tr>
		<?php
	
}

?>
</table>
</body>
</html>