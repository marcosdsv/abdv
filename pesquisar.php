<?php
include_once "sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>ABDV Pesquisa de associados</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
<?php
include_once("menu.php");
?>
<div class="m-4">
    <form method="POST" action="visualizar2.php" autocomplete="off" class="form w-50 p-4">
        <h2 class="text-center m-2">Pesquisa de associados</h2>
        <div class="form-group row">
            <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
            <div class="col-sm-10">
                <input class="form-control" type="search" name="pesquisa" id="cpf" placeholder="Digite o cpf para pesquisa">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 text-center">
                <input class="btn btn-primary" type="submit" value="Pesquisar">
            </div>
        </div>
    </form>
</div>
</body>
</html>