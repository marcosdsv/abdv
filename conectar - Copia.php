﻿<?php
//Estabelecendo conexão com o banco de dados.
$conn = mysqli_connect('localhost', 'sistba_cadsis', 'efogy89acadez8', false, '3306', false)
		or die('Erro ao se conectar');
//Selecionando banco de dados.
mysqli_select_db($conn, 'abdv')
	or die('Banco de dados não existe');
?>
