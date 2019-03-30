<?php
include_once "sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Menu sistema</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
<script src="js.js"></script>
</head>
<body>
<h1>Sistema ABDV</h1><br>
<ul>
<li><a href="cadastro.php">Novo cadastro</a></li>
<li><a href="visualizar.php">Visualizar cadastro</a></li>
<li><a href="pesquisar.php">Pesquisar cadastro</a></li>
<li><a href="?sair=ok" onclick="return confirm('Deseja sair do sistema?')">Sair</a></li>
</ul>
</body>
</html>