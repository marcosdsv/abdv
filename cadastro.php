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
    <form method="POST" action="validar.php" autocomplete="off">
        <h2 class="text-center m-2">Cadastro de associados</h2>
            <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" autofocus required placeholder="Digite nome completo">
                        
                <input type="text" name="endereco" id="endereco" required placeholder="Digite o endereço">
            </div>
        </div>
        <div class="form-group row">
            <label for="telefone" ">Telefone: </label>
            
                <input type="text" name="telefone" id="telefone" required placeholder="Digite o número do telefone">
            </div>
        </div>
		<div class="form-group row">
            <label for="celular" ">Celular: </label>
            
                <input type="text" name="celular" id="celular" required placeholder="Digite o número do celular">
        
            <label for="rg">RG:</label>
                <input type="text" name="rg" id="rg" required placeholder="Digite o RG">

            <label for="cpf" ">CPF:</label>
                <input type="text" name="cpf" id="cpf" required placeholder="Digite o CPF">
            
        
        
            <label for="email" ">E-mail:</label>
                        <input  type="email" name="email" id="email" required placeholder="Digite o E-mail">
            
        <label for="datanascimento" ">Data de nascimento:</label>
                           <input type="date" name="datanascimento" id="datanascimento" required>
            
            <label for="tipodeficiencia" ">Tipo de deficiência:</label>
                <select name="tipodeficiencia" id="tipodeficiencia">
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
          
        
        
            <label for="tipoassociado" ">Tipo de associado:</label>
                           <select name="tipoassociado" id="tipoassociado">
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
            

            <label for="trabalha" ">Trabalha:</label>
<select name="trabalha" id="trabalha" onkeyup="escolhertrabalho()">
<option value="0"></option>
<option value="sim">Sim</option>
<option value="não">Não</option>
                </select>

        <div id="cargo" style="display: none">
            <label for="tipocargo" ">Profição:</label>
                <select name="tipocargo" id="tipocargo">
                    <option value="0"></option>
<?php
$tipocargo = "SELECT * FROM tipocargo";
$resultadocargo = mysqli_query($conn, $tipocargo);
while($cargo = mysqli_fetch_assoc($resultadocargo)){
?>
<option value="<?php echo $cargo['tipocargo'];?>"><?php echo $cargo['tipocargo'];?></option>
<?php
}
?>
</select>
</div>
      <div id="beneficio" style="display: none">
            <label for="tipobeneficio" ">Tipo de beneficio:</label>
                <select name="tipobeneficio" id="tipobeneficio">
                    <option value="0"></option>
<?php
$tipobeneficio = "SELECT * FROM tipobeneficio";
$resultadobeneficio = mysqli_query($conn, $tipobeneficio);
while($beneficio = mysqli_fetch_assoc($resultadobeneficio)){
?>
<option value="<?php echo $beneficio['tipobeneficio'];?>"><?php echo $beneficio['tipobeneficio'];?></option>
<?php
}
?>
</select>
</div>

        
            
                <input type="submit" value="Cancelar">
                <input type="submit" value="Salvar">
            
        
    </form>

</body>
</html>