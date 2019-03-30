<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>ABDV Cadastro de Associados</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>
<body>
<?php
include_once("menu.php");
//buscando o valor do id pelo parametro.
$id = filter_input(INPUT_GET,"id");
//incluíndo o arquivo de conexão do banco.
include_once "conectar.php";
//armazenando o id na variável.
$sql = "SELECT * FROM associados WHERE id='$id'";
//executa o id do banco.
$resultado = mysqli_query($conn, $sql) or die('Erro na execução');
$array = mysqli_fetch_assoc($resultado);
?>
<div class="m-4">
    <form method="POST" action="editar.php" autocomplete="off" class="form w-50 p-4">
        <h2 class="text-center">Edição de associados</h2>
        <input type="hidden" name="id" value="<?=$array['id']?>">
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" name="nome" value="<?=$array['nome']?>" autofocus placeholder="Digite nome completo"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Endereço:</label>
            <div class="col-sm-10">
                <input type="text" name="endereco" value="<?=$array['endereco']?>" placeholder="Digite o endereço"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Telefone:</label>
            <div class="col-sm-10">
                <input type="text" name="telefone" value="<?=$array['telefone']?>" placeholder="Digite o Telefone"><br>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">RG:</label>
            <div class="col-sm-10">
                <input type="text" name="rg" value="<?=$array['rg']?>" placeholder="Digite o RG">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">CPF:</label>
            <div class="col-sm-10">
                <input type="text" name="cpf" value="<?=$array['cpf']?>" placeholder="Digite o CPF">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">E-mail:</label>
            <div class="col-sm-10">
                <input type="email" name="email" value="<?=$array['email']?>" placeholder="Digite o E-mail">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Trabalha:</label>
            <div class="col-sm-10">
                <select name="trabalha" class="form-control">
                    <option>...</option>
                    <option>Sim</option>
                    <option>Não</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Profissão: </label>
            <div class="col-sm-10">
                <select name="tipo" class="form-control">
                    <option>Empresa privada</option>
                    <option>Empresa pública</option>
                    <option>Auxilio doença</option>
                    <option>BPC
                    </option>
                    <option>Aposentado</option>
                </select>
            </div>
        </div>
        <div class="form-group text-center">
            <input class="btn btn-secondary" type="button" value="Cancelar">
            <input type="submit" class="btn btn-primary" value="Salvar alteração">
        </div>
    </form>
</div>
</body>
</html>
