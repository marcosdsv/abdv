<?php
include_once "sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>ABDV Pesquisa de associados</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>
<body>
<?php
include_once("menu.php");
?>
<div class="m-4">
    <form method="POST" action="visualizar2.php" class="form w-25 p-4">
        <input class="form-control" type="search" autofocus name="pesquisa" placeholder="Digite o cpf"><br>
        <input class="form-control" type="search" autofocus name="pesquisa" placeholder="Digite o e-mail"><br>
        <input class="form-control" type="submit" value="Pesquisar">
    </form>
</div>
</body>
</html>
