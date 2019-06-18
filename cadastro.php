<?php
include_once "sessao.php";
include_once "conectar.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>ABDV Cadastro de Associados</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
<script src="js.js"></script>
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
            <label for="datanascimento" class="col-sm-2 col-form-label">Data de nascimento:</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" name="datanascimento" id="datanascimento" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="tipodeficiencia" class="col-sm-2 col-form-label">Tipo de deficiência:</label>
			<div class="col-sm-10">
                <select name="tipodeficiencia" class="form-control" id="tipodeficiencia">
                    <option value="0"></option>
					<?php
					$sql = "SELECT * FROM tipodeficiencia";
					$res = mysqli_query($conn, $sql);
					while($dados = mysqli_fetch_assoc($res)){
					?>
                    <option value="<?php echo $dados['tipodeficiencia']; ?>"><?php echo $dados['tipodeficiencia']; ?></option>
                    <?php
					}
					?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="tipoassociado" class="col-sm-2 col-form-label">Tipo de associado:</label>
            <div class="col-sm-10">
                <select name="tipoassociado" class="form-control" id="tipoassociado">
                    <option value="0"></option>
					<?php
					$tipoassociado = "SELECT * FROM tipoassociado";
$query = mysqli_query($conn, $tipoassociado);
while($dados2 = mysqli_fetch_assoc($query)){
	?>
					
                    <option value="<?php echo $dados2['tipoassociado'];?>"><?php echo $dados2['tipoassociado'];?></option>
                    <?php
}
?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="trabalha" class="col-sm-2 col-form-label">Trabalha:</label>
            <div class="col-sm-10">
                <select name="trabalha" class="form-control" id="trabalha">
                    <option value="0"></option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="tipo" class="col-sm-2 col-form-label">Profissão:</label>
            <div class="col-sm-10">
                <select name="tipo" class="form-control" id="tipo">
                    <option value="0"></option>
                    <option value="Empresa Privada">Empresa Privada</option>
                    <option value="Empresa Pública">Empresa Pública</option>
                    <option value="Auxilio doença">Auxilio doença</option>
                    <option value="BPC">BPC</option>
                    <option value="Aposentado">Aposentado</option>
					<option value="Não trabalha">Não trabalha</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 text-center">
                <input class="btn btn-secondary" type="button" value="Cancelar" onclick="cancelar()">
                <input class="btn btn-primary" type="submit" value="Salvar">
            </div>
        </div>
    </form>
</div>
</body>
</html>