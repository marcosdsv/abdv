<?php
include_once("sessao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/marcador.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a onclick="focar()" class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastro.php">Novo cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="visualizar.php">Visualizar cadastro</a>
            </li>
			<li class="nav-item">
<a class="nav-link" href="pesquisar.php">Pesquisar cadastro</a>
						</li>
            <li class="nav-item">
                <a class="nav-link" href="?sair=ok" onclick="return confirm('Deseja sair do sistema?')">Sair</a>
				</li>
        </ul>
    </div>
</nav>
</body>
</html>