<?php
include_once "sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>ABDV Pesquisa de associados</title>
</head>
<body>
<form method="POST" action="visualizar2.php">
<input type="search" autofocus name="pesquisa" placeholder="Digite o cpf"><br>
<input type="search" autofocus name="pesquisa" placeholder="Digite o e-mail"><br>
<input type="submit" value="Pesquisar">
</form>
<a href="cadastro.php">Cadastrar associado</a><br>
<a href="menu.php">Voltar ao menu</a>
</body>
</html>