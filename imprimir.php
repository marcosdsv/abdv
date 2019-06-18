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
</tr>
<?php
$conn = new mysqli('localhost', 'root', '', 'abdv');
$sql = "select * from associados order by nome asc";
$resultado = mysqli_query($conn, $sql);
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
<?php
}
?>
</table>

</body>
</html>