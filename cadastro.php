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
                <input class="form-control" type="text" name="telefone" id="telefone" required placeholder="Digite o nÃºmero do telefone">
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
					<?php
					$tipodeficiencia = "SELECT * FROM tipodeficiencia";
					$querydeficiencia = mysqli_query($conn, $tipodeficiencia);	
					while($deficiencia = mysqli_fetch_assoc($querydeficiencia)){
						$id = $deficiencia['id'];
						$dadosdeficiencia = $deficiencia['tipodeficiencia'];
					?>
                    <option value="<?php echo $id; ?>"><?php echo $dadosdeficiencia;?></option>
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
$queryassociado = mysqli_query($conn, $tipoassociado);
while($associado = mysqli_fetch_assoc($queryassociado)){
	?>
					
                    <option value="<?php echo $associado['fktipoassociado'];?>"><?php echo $associado['tipoassociado'];?></option>
                    <?php
}
?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="tipocargo" class="col-sm-2 col-form-label">ProfissÃo:</label>
            <div class="col-sm-10">
                <select name="tipocargo" class="form-control" id="tipocargo">
<?php
$tipocargo = "SELECT * FROM tipocargo";
$querycargo = mysqli_query($conn, $tipocargo);
while($cargo = mysqli_fetch_assoc($querycargo)){
	?>
                    <option value="<?php echo $cargo['fktipocargo'];?>"><?php echo $cargo['tipocargo'];?></option>
      <?php
}
?>
	  </select>
</div>
</div>
<div class="form-group row">
            <label for="tipobeneficio" class="col-sm-2 col-form-label">Beneficio:</label>
            <div class="col-sm-10">
                <select name="tipobeneficio" class="form-control" id="tipobeneficio">
<?php
$tipobeneficio = "SELECT * FROM tipobeneficio";
$querybeneficio = mysqli_query($conn, $tipobeneficio);
while($beneficio = mysqli_fetch_assoc($querybeneficio)){
	?>
                    <option value="<?php echo $beneficio['fktipobeneficio'];?>"><?php echo $beneficio['tipobeneficio'];?></option>
      <?php
}
?>
	  </select>
</div>
</div>
        <div class="form-group row">
            <label for="dataadmissao" class="col-sm-2 col-form-label">Data de admissÃo:</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" name="dataadmissao" id="dataadmissao" required placeholder="Digite a data atual do cadastro">
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