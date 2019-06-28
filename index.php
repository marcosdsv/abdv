<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login sistema</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/signin.css">
	</head>
	<body>
		<div class="container">
            <div class="logo text-center mb-3">
                <img src="./pix/logo-icone.png" alt="Logomarca da Associação Brasiliense de Deficientes Visuais:
                um quadrado com a cor de fundo azul, borda com um azul mais claro e uma cruz com a mesma tonalidade da borda">
            </div>
			<div class="form-signin">
				<h2 class="text-center m-2">Login do sistema ABDV</h2>
				<form method="POST" action="autenticar.php" autocomplete="off">
					<label>E-mail: </label>
					<input type="email" autofocus required name="email" placeholder="Digite seu e-mail" class="form-control"><br>
					<label>Senha: </label>
					<input type="password" required name="senha" placeholder="Digite sua senha" class="form-control"><br>

					<input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">

								</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
