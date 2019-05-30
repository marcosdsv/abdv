<?php
include_once "sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>ABDV Cadastro de Associados</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
<?php
include_once("menu.php");
?>
<div class="m-4">
    <form method="POST" action="validar.php" autocomplete="off" class="form w-50 p-4">
        <h2 class="text-center m-2">Cadastro de associados</h2>
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nome" id="nome" autofocus required placeholder="Digite nome completo">
            </div>
        </div>
        <div class="form-group row">
            <label for="endereco" class="col-sm-2 col-form-label">Endereço: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="endereco" id="endereco" required placeholder="Digite o endereço">
            </div>
        </div>
        <div class="form-group row">
            <label for="telefone" class="col-sm-2 col-form-label">Telefone: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="telefone" id="telefone" required placeholder="Digite o número do telefone">
            </div>
        </div>
		<div class="form-group row">
            <label for="celular" class="col-sm-2 col-form-label">Celular: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="celular" id="celular" required placeholder="Digite o número do celular">
            </div>
        </div>
        <div class="form-group row">
            <label for="rg" class="col-sm-2 col-form-label">RG:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="rg" id="rg" required placeholder="Digite o RG">
            </div>
        </div>
        <div class="form-group row">
            <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="cpf" id="cpf" required placeholder="Digite o CPF">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
            <div class="col-sm-10">
                <input class="form-control" type="email" name="email" id="email" required placeholder="Digite o E-mail">
            </div>
        </div>
        <div class="form-group row">
            <label for="trabalha" class="col-sm-2 col-form-label">Trabalha:</label>
            <div class="col-sm-10">
                <select name="trabalha" class="form-control" id="trabalha">
                    <option>...</option>
                    <option>Sim</option>
                    <option>Não</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="tipo" class="col-sm-2 col-form-label">Profissão:</label>
            <div class="col-sm-10">
                <select name="tipo" class="form-control" id="tipo">
                    <option>...</option>
                    <option>Empresa Privada</option>
                    <option>Empresa Pública</option>
                    <option>Auxilio doença</option>
                    <option>BPC</option>
                    <option>Aposentado</option>
					<option>Não tem trabalho</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 text-center">
                <input class="btn btn-secondary" type="button" value="Cancelar">
                <input class="btn btn-primary" type="submit" value="Salvar">
            </div>
        </div>
    </form>
</div>
</body>
</html>