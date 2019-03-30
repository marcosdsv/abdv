<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Login sistema</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="login.css" rel="stylesheet" type="text/css">
<script src="login.js" type="text/javascript"></script>
</head>
<body class="geral">
<div id="form" align="center" class="formlogin">
  <form method="POST" action="../autenticar.php" name="login" id="login" autocomplete="off">
	<div class="margem">
<label>E-mail: </label>
		  <input type="email" autofocus required name="email" size="50" maxlength="100" id="user" onMouseOver="this.focus()" class="cxtext">
		</div>
<label>Senha: </label>
		  <input type="password" required name="senha" size="50" maxlength="20" id="pwd" onMouseOver="this.focus()" class="cxtext">
		</div>
<input type="submit" value="Entrar"> 
		</div>
	</div>
  </form>
</div>
</body>
</html>