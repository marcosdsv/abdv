<?php
include_once("sessao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>ABDV edição de Associados</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
<?php
//inserindo arquivo do menu
include_once("menu.php");
//incluíndo o arquivo de conexão do banco.
include_once "conectar.php";
//buscando o valor do id pelo parametro.
$id = filter_input(INPUT_GET,"id");
//armazenando o id na variável.
$sql = "SELECT * FROM associados WHERE id='$id'";
//executa o id do banco.
$resultado = mysqli_query($conn, $sql) or die('Erro na execução');
$dados = mysqli_fetch_assoc($resultado);
$nome = ucwords(strtolower($dados['nome']));
$endereco = ucwords(strtolower($dados['endereco']));
$telefone = $dados['telefone'];
$celular = $dados['celular'];
$rg = $dados['rg'];
$cpf = $dados['cpf'];
$email = strtolower($dados['email']);
$datanascimento = $dados['datanascimento'];
$tipodeficiencia = ucwords(strtolower($dados['tipodeficiencia']));
$tipoassociado = ucwords(strtolower($dados['tipoassociado']));
$tipocargo = ucwords(strtolower($dados['tipocargo']));
$tipobeneficio = ucwords(strtolower($dados['tipobeneficio']));
$dataadmissao = $dados['dataadmissao'];
?>
<div class="m-4">
    <form method="POST" action="editar.php" autocomplete="off" class="form w-50 p-4">
        <h2 class="text-center m-2">Edição de associados</h2>
        <div class="form-group row">
		<input type="hidden" name="id" value="<?=$array['id']?>">
            <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nome" value="<?php echo $nome;?>" id="nome" autofocus required placeholder="Digite nome completo">
            </div>
        </div>
        <div class="form-group row">
            <label for="endereco" class="col-sm-2 col-form-label">Endereço: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="endereco" value="<?php echo $endereco;?>" id="endereco" required placeholder="Digite o endereço">
            </div>
        </div>
        <div class="form-group row">
            <label for="telefone" class="col-sm-2 col-form-label">Telefone: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="telefone" value="<?php echo $telefone;?>" id="telefone" required placeholder="Digite o número do telefone">
            </div>
        </div>
		<div class="form-group row">
            <label for="celular" class="col-sm-2 col-form-label">Celular: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="celular" value="<?php echo $celular;?>" id="celular" required placeholder="Digite o número do celular">
            </div>
        </div>
        <div class="form-group row">
            <label for="rg" class="col-sm-2 col-form-label">RG:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="rg" value="<?php echo $rg;?>" id="rg" required placeholder="Digite o RG">
            </div>
        </div>
        <div class="form-group row">
            <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="cpf" value="<?php echo $cpf;?>" id="cpf" required placeholder="Digite o CPF">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
            <div class="col-sm-10">
                <input class="form-control" type="email" name="email" value="<?php echo $email;?>" id="email" required placeholder="Digite o E-mail">
            </div>
        </div>
		<div class="form-group row">
            <label for="datanascimento" class="col-sm-2 col-form-label">Data de nascimento:</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" name="datanascimento" value="<?php echo $datanascimento;?>" id="datanascimento" required>
            </div>
        </div>
		<div class="form-group row">
            <label for="tipodeficiencia" class="col-sm-2 col-form-label">Tipo de deficiência:</label>
            <div class="col-sm-10">
                <select name="tipodeficiencia" class="form-control" id="tipodeficiencia">
				<?php
$tipodeficiencia = "SELECT tipodeficiencia FROM associados INNER JOIN tipodeficiencia ON associados.fktipodeficiencia = tipodeficiencia.id";
$querydeficiencia = mysqli_query($conn, $tipodeficiencia);
wwhile($deficiencia = mysqli_fetch_assoc($querydeficiencia)){
	?>
                    <option value="<?php$deficiencia['id']?>"><?php$deficiencia['fktipodeficiencia'];</option>
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
                    <option>...</option>
                    <option>Fundador</option>
                    <option>Benemérito</option>
					<option>Honorário</option>
					<option>Colaborador</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="trabalha" class="col-sm-2 col-form-label">Trabalha:</label>
            <div class="col-sm-10">
                <select name="trabalha" class="form-control" id="trabalha">
                    <option></option>
                    <option>Sim</option>
                    <option>Não</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="tipo" class="col-sm-2 col-form-label">Profissão:</label>
            <div class="col-sm-10">
                <select name="tipo" class="form-control" id="tipo">
                    <option></option>
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