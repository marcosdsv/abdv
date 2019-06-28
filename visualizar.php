<?php
include_once "sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>ABDV Usuários cadastrados</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
<div id="menu" style="display: block">
<?php
include_once "menu.php";
?>
</div>
<!--<div id="container">-->
<table class="table">
<caption>Tabela de associados</caption>
<thead>
<tr>
<th scope="col">Nome</th>
<th scope="col">Endereço</th>
<th scope="col">Telefone</th>
<th scope="col">Celular</th>
<th scope="col">RG</th>
<th scope="col">CPF</th>
<th scope="col">E-mail</th>
<th scope="col">Data de nascimento</th>
<th scope="col">Tipo de deficiência</th>
<th scope="col">Tipo de associado</th>
<th scope="col">Profissão</th>
<th scope="col">Beneficio</th>
<th scope="col">Data do cadastro</th>
</tr>
</thead>
<?php
//inserindo o arquivo de conexao.
include_once "conectar.php";
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
$tipodeficiencia = ucwords(strtolower($dados['fktipodeficiencia']));
$tipoassociado = ucwords(strtolower($dados['fktipoassociado']));
$tipocargo = ucwords(strtolower($dados['fktipocargo']));
$tipobeneficio = ucwords(strtolower($dados['fktipobeneficio']));
$dataadmissao = date('d/m/Y', strtotime($dados['dataadmissao']));
?>
<tbody>
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
<td><?php echo $tipocargo;?></td>
<td><?php echo $tipobeneficio;?></td>
<td><?php echo $dataadmissao;?></td>
<?php
}
?>
</tbody>
</table>
<!--</div>-->
</body>
</html>